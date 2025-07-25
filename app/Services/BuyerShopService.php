<?php

namespace App\Services;

use App\Notifications\BuyerSaleRequestNotification;
use App\Repositories\Contracts\BuyerShopRepositoryInterface;
use App\Repositories\Contracts\InstallmentRepositoryInterface;
use App\Services\ActivityLog\Contracts\ActivityLogServiceInterface;
use App\Services\Contracts\AgentShopServiceInterface;
use App\Services\Contracts\BuyerShopServiceInterface;
use App\Models\BuyerShop;
use App\Services\Contracts\InstallmentServiceInterface;
use App\Services\Traits\BaseServiceTrait;
use App\Utils\ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Notification;

class BuyerShopService implements BuyerShopServiceInterface
{
    use BaseServiceTrait;

    public function __construct(
        protected BuyerShopRepositoryInterface $repository,
        protected InstallmentRepositoryInterface $installmentRepository,
        protected ActivityLogServiceInterface $logger,
        protected AgentShopServiceInterface $agentShopService
    )
    {
    }

    // Implement service methods
    public function getAllBuyerShops(): LengthAwarePaginator|DatabaseCollection|Collection
    {
        // TODO: Implement getAllBuyerShops() method.
    }

    public function getDataTable(Request $request): array
    {
        return ExceptionHandler::handle(function() use ($request) {
            $draw = $request->input('draw');

            $agents = $this->repository->getDataTableData($request);

            return [
                "draw" => intval($draw),                   // Draw parameter for DataTables sequence validation
                "recordsTotal" => $this->repository->count(),        // Total records in the database (without filters)
                "recordsFiltered" => $agents->total(),  // Total records after filtering
                "data" => $agents->items(),             // Data array for the current page
            ];
        }, []);
    }

    public function getBuyerShopById(mixed $id): ?BuyerShop
    {
        return ExceptionHandler::handle(function () use ($id) {
            return $this->repository->findById($id, ['agent', 'shop', 'buyer', 'agentShop', 'status', 'installments']);
        });
    }

    public function storeBuyerShop(array $data): ?BuyerShop
    {
        return ExceptionHandler::handle(function () use ($data) {
            switch (getCurrentGuard()) {
                case "admin":
                    $data["status_id"] = getStatusId("Buyer Shop", "approved");
                    break;
                case "employee":
                    $data["status_id"] = getStatusId("Buyer Shop", "verified");
                    break;
                default:
                    $data["status_id"] = getStatusId("Buyer Shop", "pending");
                    break;
            }

            $agentShop = $this->agentShopService->getAgentShopById($data['reserve_id']);
            $data['agent_id'] = $agentShop->agent_id;
            $data['shop_id'] = $agentShop->shop_id;
            $data['agent_shop_id'] = $agentShop->id;

            $item = $this->repository->create($data);


            switch (getCurrentGuard()) {
                case "admin":
                    DatabaseNotification::whereJsonContains('data->buyer_shop_id', $item->id)
                        ->where('type', BuyerSaleRequestNotification::class)
                        ->update(['read_at' => now()]);
                    break;
                case "employee":
                    DatabaseNotification::whereJsonContains('data->buyer_shop_id', $item->id)
                        ->where('type', BuyerSaleRequestNotification::class)
                        ->update(['read_at' => now()]);
                    Notification::send(getCurrentProperty()->admins, new BuyerSaleRequestNotification($item));
                    break;
                default:
                    Notification::send(getCurrentProperty()->employees, new BuyerSaleRequestNotification($item));
                    break;
            }

            return $this->getBuyerShopById($item->id);
        }, null, true);
    }

    public function verifyRequest(array $data)
    {
        return ExceptionHandler::handle(function () use ($data) {
            $item = $this->getBuyerShopById($data['buyer_shop_id']);
            $item->status_id = getStatusId("Buyer Shop", "verified");
            $item->save();

            DatabaseNotification::whereJsonContains('data->buyer_shop_id', $item->id)
                ->where('type', BuyerSaleRequestNotification::class)
                ->update(['read_at' => now()]);

            Notification::send(getCurrentProperty()->admins, new BuyerSaleRequestNotification($item));

            return true;
        }, false, true);
    }

    public function approveRequest(array $data)
    {
        return ExceptionHandler::handle(function () use ($data) {
            $item = $this->getBuyerShopById($data['buyer_shop_id']);
            $item->status_id = getStatusId("Buyer Shop", "Approved");
            $item->save();

            DatabaseNotification::whereJsonContains('data->buyer_shop_id', $item->id)
                ->where('type', BuyerSaleRequestNotification::class)
                ->update(['read_at' => now()]);

            return true;
        }, false, true);
    }

    public function rejectRequest(array $data)
    {
        return ExceptionHandler::handle(function () use ($data) {
            $item = $this->getBuyerShopById($data['buyer_shop_id']);
            $item->status_id = getStatusId("Buyer Shop", "Rejected");
            $item->save();

            DatabaseNotification::whereJsonContains('data->buyer_shop_id', $item->id)
                ->where('type', BuyerSaleRequestNotification::class)
                ->update(['read_at' => now()]);

            return true;
        }, false, true);
    }

    public function updateBuyerShop(BuyerShop $buyerShop, array $data): BuyerShop
    {
        // TODO: Implement updateBuyerShop() method.
    }

    public function deleteBuyerShop(BuyerShop $buyerShop): bool
    {
        // TODO: Implement deleteBuyerShop() method.
    }

    public function deleteBulkBuyerShops(array $ids): bool
    {
        // TODO: Implement deleteBulkBuyerShops() method.
    }
}
