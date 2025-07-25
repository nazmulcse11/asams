<?php

namespace App\Services;

use App\Filters\PropertyBuyerShopFilter;
use App\Repositories\Contracts\BuyerRepositoryInterface;
use App\Repositories\Contracts\PropertyRepositoryInterface;
use App\Repositories\Contracts\ShopRepositoryInterface;
use App\Services\Contracts\AdminReportServiceInterface;
use App\Utils\ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class AdminReportService implements AdminReportServiceInterface
{

    public function __construct(
        protected PropertyRepositoryInterface $propertyRepository,
        protected ShopRepositoryInterface $shopRepository,
        protected BuyerRepositoryInterface $buyerRepository,
        protected PropertyBuyerShopFilter $propertyBuyerShopFilter,
    )
    {
    }

    public function getPropertyBuyerShopDataTable(Request $request): array
    {
        return ExceptionHandler::handle(function() use ($request) {
            $draw = $request->input('draw');
            $length = (int) $request->input('length', 10);
            $start = (int) $request->input('start', 0);
            $page = max(1, (int) floor($start / $length) + 1); // Ensure valid page number

            $query = $this->propertyBuyerShopQuery();

            $filtered = $this->propertyBuyerShopFilter->apply($query, $request);

            $items = $filtered->orderBy('id', 'desc')->paginate($length, ['*'], 'page', $page);

            // adding total_payment amount to items
            $items = $items->map(function ($shop) {
                $shop->total_payment_amount = $shop->buyer && $shop->buyer->payments
                    ? $shop->buyer->payments->sum('payment_amount')
                    : 0;

                return $shop;
            });

            return [
                "draw" => intval($draw),                   // Draw parameter for DataTables sequence validation
                "recordsTotal" => $this->shopRepository->count(),        // Total records in the database (without filters)
                "recordsFiltered" => count($items),  // Total records after filtering
                "data" => $items,             // Data array for the current page
            ];
        }, []);
    }

    public function propertyBuyerShopQuery()
    {
        return $this->shopRepository->getModel()::with([
            'block:id,name,floor_id',
            'block.floor:id,name,property_id',
            'block.floor.property:id,name,address',
            'buyer',
            'buyer.payments:id,buyer_id,shop_id,payment_amount',
            'buyerShops:id,shop_id,buyer_id,sell_amount',
            ]);
    }
}
