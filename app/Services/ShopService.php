<?php

namespace App\Services;

use App\Filters\ShopFilter;
use App\Repositories\Contracts\ShopRepositoryInterface;
use App\Services\ActivityLog\Contracts\ActivityLogServiceInterface;
use App\Services\Contracts\AdministratorServiceInterface;
use App\Services\Contracts\BlockServiceInterface;
use App\Services\Contracts\ShopServiceInterface;
use App\Models\Shop;
use App\Services\Traits\BaseServiceTrait;
use App\Utils\ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;

class ShopService implements ShopServiceInterface
{
    use BaseServiceTrait;

    public function __construct(
        protected ShopRepositoryInterface $repository,
        protected MediaService $mediaService,
        protected ActivityLogServiceInterface $logger,
        protected BlockServiceInterface $blockService,
        protected ShopFilter $filter,
        protected AdministratorServiceInterface $administratorService
    )
    {}

    public function search(Request $request): LengthAwarePaginator
    {
        $filtered = $this->filter->apply($this->repository->getModel()::query(), $request);
        return $filtered->orderBy('id', 'desc')->paginate();
    }

    // Implement service methods
    public function getAllShops(
        array $select = ["*"],
        array $conditions = [],
        array $with = []
    ): LengthAwarePaginator|DatabaseCollection|Collection
    {
        return ExceptionHandler::handle(function () use ($select, $conditions, $with) {
            $this->logger->log("getting all shop data.", [], "shop");
            return $this->repository->all($select, $conditions, $with);
        });
    }

    public function getShopByIdWithAgentUnit(mixed $id)
    {
        return ExceptionHandler::handle(function () use ($id) {
            $this->logger->log("getting shop data with agent unit.", ["shop_id" => $id], "shop");
            return $this->repository->findById($id, ["agentUnit"]);
        });
    }

    public function getShopById(mixed $id): ?Shop
    {
        return ExceptionHandler::handle(function () use ($id) {
            return $this->repository->findById($id, [
                'block',
                'block.floor',
                'block.floor.property',
                'agentShops',
                'agentShops.agent',
                'features',
                'buyerShops',
                'buyerShops.agent',
                'buyerShops.installments',
                'buyer',
                'status',
            ]);
        });
    }

    public function storeShop(array $data): ?Shop
    {
        return ExceptionHandler::handle(function () use ($data) {
            $block = $this->blockService->getBlockById($data['block_id']);
            $data = array_merge($data, ["floor_id" => $block->floor_id]);
            $shop = $this->repository->create($data);

            if (!empty($data['key']) && is_array($data['key'])) {
                foreach ($data['key'] as $index => $key) {
                    if($key == null) {
                        continue;
                    }
                    $shop->features()->create([
                        'name'   => $key,
                        'value' => $data['value'][$index] ?? null,
                    ]);
                }
            }

            if (isset($data['picture'])) {
                $this->mediaService->uploadMedia($shop, $data['picture'], "picture");
            }

            return $this->repository->findById($shop->id, ['block']);
        }, null, true);
    }

    public function updateShop(Shop $shop, array $data): Shop
    {
        return ExceptionHandler::handle(function () use ($shop, $data) {
            if (isset($data['picture'])) {
                $this->mediaService->updateMedia($shop, $data['picture'], "picture");
            }

            $shop->features()->delete();

            if (!empty($data['key']) && is_array($data['key'])) {
                foreach ($data['key'] as $index => $key) {
                    if($key == null) {
                        continue;
                    }

                    $shop->features()->create([
                        'name'   => $key,
                        'value' => $data['value'][$index] ?? null,
                    ]);
                }
            }

            return $this->repository->update($shop->id, $data);
        });
    }

    public function getAgentApprovedShopsOnFloor(mixed $agentId, mixed $floorId)
    {
        return ExceptionHandler::handle(function () use ($agentId, $floorId) {
            $this->logger->log("getting agent approved shops on floor.", ["agent_id" => $agentId, "floor_id" => $floorId], "shop");
            $shops = $this->repository->fetchShopsByFloorAgent($agentId, $floorId);

            return $shops->map(function (Shop $shop) {
                return $this->getFloorUnit($shop);
            });
        });
    }

    public function getFloorUnit(Shop $shop)
    {
        return ExceptionHandler::handle(function () use ($shop) {
            $this->logger->log("getting floor unit.", ["shop_id" => $shop->id], "shop");
            return [
                'id' => $shop->id,
                'number' => $shop->number,
                'min_sale_price' => $shop->min_sale_price,
                'booking_percent' => $shop->booking_percent,
                'area' => $shop->area,
                'length' => $shop->length,
                'width' => $shop->width,
                'length_half_corridor' => $shop->length_half_corridor,
                'width_full_shop' => $shop->width_full_shop,
                'total_area' => $shop->total_area,
                'x_feet' => $shop->floor_position['x'] ?? 0,
                'y_feet' => $shop->floor_position['y'] ?? 0,
                'unit_width' => (float) isset($shop->floor_position['width']) ? $shop->floor_position['width'] : 10,
                'unit_height' => (float) isset($shop->floor_position['height']) ? $shop->floor_position['height'] : 10,
                'block' => str($shop->block->name)->upper()->toString(),
                'created_at' => $shop->created_at,
            ];
        });
    }

    public function updateShopPosition(array $data)
    {
        return ExceptionHandler::handle(function () use ($data) {
            $this->logger->log("updating shop position.", ["shop_id" => $data['id'], "data" => $data], "shop");
            $shop = $this->repository->findbyId($data['id']);
            return $shop->update([
                'floor_position' => [
                    'x' => $data['x_feet'],
                    'y' => $data['y_feet'],
                    'width' => isset($data['width_feet']) ? $data['width_feet'] : 10,
                    'height' => isset($data['height_feet']) ? $data['height_feet'] : 10,
                ]
            ]);
        });
    }

    public function deleteShop(mixed $id, $password): bool
    {
        return ExceptionHandler::handle(function () use ($id, $password) {
            if($this->administratorService->verifyPassword($password)) {
                return $this->repository->delete($id);
            }
            return false;
        }, false);
    }

    public function getShopsForFloor(Collection $notifications, int $floorId)
    {
        return ExceptionHandler::handle(function () use ($notifications, $floorId) {
            $shopIds = $notifications->pluck('data.shop_id')->filter()->unique();

            return Shop::whereIn('id', $shopIds)
                ->where('floor_id', $floorId);
        });
    }

    public function getShopBasedFilter(Request $request)
    {
        return ExceptionHandler::handle(function () use ($request) {
            $this->logger->log("getting shop based filter.", ["request" => $request], "shop");
            return $this->repository->filterShop($request);
        });
    }

    public function bulkUpdateShops(array $ids, float $updateValue, string $updateType): bool
    {
        return ExceptionHandler::handle(function () use ($ids, $updateValue, $updateType) {
            $this->logger->log("updating bulk shops.", ["shop_ids" => $ids, "update_value" => $updateValue, "update_type" => $updateType], "shop");
            return $this->repository->bulkUpdate($ids, [$updateType => $updateValue]);
        }, false, true);
    }
}
