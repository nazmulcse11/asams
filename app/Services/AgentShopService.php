<?php

namespace App\Services;

use App\Models\AgentShop;
use App\Notifications\AgentReserveNotification;
use App\Repositories\Contracts\AgentShopRepositoryInterface;
use App\Services\Contracts\AgentShopServiceInterface;
use App\Services\Contracts\PropertyServiceInterface;
use App\Services\Contracts\ShopServiceInterface;
use App\Services\Traits\BaseServiceTrait;
use App\Utils\ExceptionHandler;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Notification;

class AgentShopService implements AgentShopServiceInterface
{
    use BaseServiceTrait;


    public function __construct(
        protected AgentShopRepositoryInterface $repository,
        protected ShopServiceInterface $shopService,
        protected PropertyServiceInterface $propertyService
    )
    {}

    // Implement service methods
    public function getAllAgentShops(): LengthAwarePaginator|DatabaseCollection|Collection
    {
        // TODO: Implement getAllAgentShops() method.
    }

    public function getAgentShopById(mixed $id): ?AgentShop
    {
        return ExceptionHandler::handle(function () use ($id) {
            return $this->repository->findById($id, [
                "agent",
                "shop",
                "status",
            ]);
        });
    }

    public function storeAgentShop(array $data): ?AgentShop
    {
        return ExceptionHandler::handle(function () use ($data) {
            $item = $this->repository->create($data);

            if(!$item) { return null; }

            $item = $this->getAgentShopById($item->id);

            $propertyId = $item->shop?->floor?->property_id;

            $data = [
                'message' => "{$item?->agent?->username} has reserved shop {$item?->shop?->number}",
                'agent_id' => $item->agent_id,
                'shop_id' => $item->shop_id,
                'agent_shop_id' => $item->id,
                'block_id' => $item->shop?->block_id,
                'floor_id' => $item->shop?->floor_id,
                'property_id' => $propertyId,
                "type" => "agent"
            ];

            $property = $this->propertyService->getPropertyById($propertyId);

            Notification::send($property->employees, new AgentReserveNotification($data));

            return $item;
        });
    }

    public function updateAgentShop(AgentShop $agentShop, array $data): AgentShop
    {
        return ExceptionHandler::handle(function () use ($agentShop, $data) {
            return $this->repository->update($agentShop->id, $data);
        });
    }

    public function verify($reserveId): bool
    {
        return ExceptionHandler::handle(function () use ($reserveId) {
            $item = $this->getAgentShopById($reserveId);

            $this->updateAgentShop($item, [
                "status_id" => getStatusId('Agent Shop', 'Verified')
            ]);

            $property = $this->propertyService->getPropertyById($item?->shop?->floor?->property_id);

            getCurrentAuthenticatedUser()->unreadNotifications
                ->filter(fn($n) =>
                    data_get($n->data, 'shop_id') == $item->shop_id &&
                    data_get($n->data, 'agent_id') == $item->agent_id &&
                    data_get($n->data, 'type') === 'agent'
                )
                ->each(fn($n) => $n->markAsRead());

            Notification::send($property->admins, new AgentReserveNotification([
                'message' => "{$item?->agent?->username} has reserved shop {$item?->shop?->number} and {getCurrentAuthenticatedUser()->username} has verified the reservation",
                'agent_id' => $item->agent_id,
                'shop_id' => $item->shop_id,
                'agent_shop_id' => $item->id,
                'block_id' => $item->shop?->block_id,
                'floor_id' => $item->shop?->floor_id,
                'property_id' => $item?->shop?->floor?->property_id,
                "type" => "agent"
            ]));



            return true;

        }, false);
    }

    public function approve($shopId, $reserveId): bool
    {
        return ExceptionHandler::handle(function () use ($shopId, $reserveId) {
            $shop = $this->shopService->getShopById($shopId);
            $item = $this->getAgentShopById($reserveId);

            $this->updateAgentShop($item, [
                "status_id" => getStatusId('Agent Shop', 'Approved')
            ]);

            $shop->agentShops()
                ->where('id', '!=', $item->id)
                ->update([
                    "status_id" => getStatusId('Agent Shop', 'Rejected')
            ]);

            DatabaseNotification::whereNull('read_at')
                ->where('notifiable_type', get_class(getCurrentAuthenticatedUser()))
                ->where('data->shop_id', $item->shop_id)
                ->where('data->agent_id', $item->agent_id)
                ->where('data->type', 'agent')
                ->get()
                ->each(fn($n) => $n->markAsRead());

            return true;
        }, false);
    }

    public function reject($reserveId): bool
    {
        return ExceptionHandler::handle(function () use ($reserveId) {
            $item = $this->getAgentShopById($reserveId);

            $this->updateAgentShop($item, [
                "status_id" => getStatusId('Agent Shop', 'Rejected')
            ]);

            DatabaseNotification::whereNull('read_at')
                ->where('notifiable_type', get_class(getCurrentAuthenticatedUser()))
                ->where('data->shop_id', $item->shop_id)
                ->where('data->agent_id', $item->agent_id)
                ->where('data->type', 'agent')
                ->get()
                ->each(fn($n) => $n->markAsRead());

            return true;
        }, false);
    }

    public function deleteAgentShop(AgentShop $agentShop): bool
    {
        // TODO: Implement deleteAgentShop() method.
    }

    public function deleteBulkAgentShops(array $ids): bool
    {
        // TODO: Implement deleteBulkAgentShops() method.
    }
}
