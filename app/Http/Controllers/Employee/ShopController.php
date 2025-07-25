<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Shop\BulkDestroyShopRequest;
use App\Http\Requests\Admin\Shop\StoreShopRequest;
use App\Http\Requests\Admin\Shop\UpdateShopRequest;
use App\Models\Shop;
use App\Services\Contracts\FloorServiceInterface;
use App\Services\Contracts\PropertyServiceInterface;
use App\Services\Contracts\ShopServiceInterface;
use App\Utils\PageConfig;
use Illuminate\Http\Request;

class ShopController extends Controller
{

    protected object $pageConfig;

    public function __construct(
        protected PropertyServiceInterface $propertyService,
        protected FloorServiceInterface $floorService,
        protected ShopServiceInterface $shopService,
    )
    {}

    public function index(Request $request)
    {
        if($request->ajax()) {
            $floor = $request->filled('floor_id')
                ? $this->floorService->getFloorById($request->floor_id)
                : null;

            $shops = $floor?->shops()->paginate(10);

            return response()->json([
                'success' => true,
                'next_page_url' => $shops?->nextPageUrl(),
                'html' => view('employee.shop.request.floor_body', compact('floor', 'shops'))->render(),
            ]);
        }

        return view('employee.shop.index', [
            "item" => getCurrentProperty(),
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = $this->shopService->getShopById($id);

        if(request()->ajax()) {
            if(!$item) {
                return response()->json([
                    'success' => false,
                ]);
            }

            return response()->json([
                'success' => true,
                'data' => view('employee.shop.request.shop_details_modal', [
                    'item' => $item
                ])->render()
            ]);
        }

        return view('employee.shop.show', compact('item'));
    }
}
