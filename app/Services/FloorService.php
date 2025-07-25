<?php

namespace App\Services;

use App\Repositories\Contracts\FloorRepositoryInterface;
use App\Repositories\Contracts\ShopRepositoryInterface;
use App\Services\Contracts\FloorServiceInterface;
use App\Models\Floor;
use App\Services\Contracts\ShopServiceInterface;
use App\Services\Traits\BaseServiceTrait;
use App\Utils\ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Support\Collection;

class FloorService implements FloorServiceInterface
{
    use BaseServiceTrait;

    protected FloorRepositoryInterface $floorRepository;
    protected ShopServiceInterface $shopService;

    public function __construct(FloorRepositoryInterface $floorRepository, ShopServiceInterface $shopService)
    {
        $this->floorRepository = $floorRepository;
        $this->shopService = $shopService;
    }

    // Implement service methods
    public function getAllFloors(): LengthAwarePaginator|DatabaseCollection|Collection
    {
        return ExceptionHandler::handle(function () {
            return $this->floorRepository->all();
        });
    }

    public function getFloorById(mixed $id): ?Floor
    {
        return ExceptionHandler::handle(function () use ($id) {
            return $this->floorRepository->findbyId($id, ['property', 'blocks']);
        });
    }

    public function floorPlan(mixed $id): ?Object
    {
        return ExceptionHandler::handle(function () use ($id) {
            $floor = $this->floorRepository->all(
                ["id", "number", "no_of_units", "property_id"],
                ["id" => $id],
                [
                    'property:id,length,wide',
                    'blocks:id,name,floor_id',
                    'blocks.shops',
                ])->first();

            $floorPlan = [
                "id" => $id,
                "floor" => $floor->number,
                "no_of_units" => $floor->no_of_units,
                "width" => $floor->property->wide,
                "length" => $floor->property->length,
            ];

            // Build the units array
            $units = [];

            foreach ($floor->blocks as $block) {
                foreach ($block->shops as $shop) {
                    $units[] = $this->shopService->getFloorUnit($shop);
                }
            }

            $floorPlan['units'] = $units;

            $floorPlan['components'] = $floor->components()->with("type")->get()->map(function($component){
                return [
                    'id' => $component->id,
                    'type' => $component->type->name ?? 'Unknown',
                    'x_position' => $component->x_position,
                    'y_position' => $component->y_position,
                    'width' => $component->width,
                    'height' => $component->height,
                ];
            });

            return arrayToObject($floorPlan);
        });
    }

    public function agentShops(mixed $floorId, mixed $agentId): ?Object
    {
        return ExceptionHandler::handle(function () use ($floorId, $agentId) {
            $floor = $this->floorRepository->all(
                ["id", "number", "no_of_units", "property_id"], [
                    "id" => $floorId,
                ], [
                    'property:id,length,wide',
                    'blocks:id,name,floor_id',
                    'blocks.shops',
                ])->first();

            $floorPlan = [
                "id" => $floorId,
                "floor" => $floor->number,
                "no_of_units" => $floor->no_of_units,
                "width" => $floor->property->wide,
                "length" => $floor->property->length,
            ];

            $floorPlan['units'] = $this->shopService->getAgentApprovedShopsOnFloor($agentId, $floorId);

            return arrayToObject($floorPlan);
        });
    }

    public function storeFloor(array $data): ?Floor
    {
        return ExceptionHandler::handle(function () use ($data) {
            return $this->floorRepository->create($data);
        });
    }

    public function updateFloor(Floor $floor, array $data): Floor
    {
        return ExceptionHandler::handle(function () use ($floor, $data) {
            return $this->floorRepository->update($floor->id, $data);
        });
    }

    public function deleteFloor(Floor $floor): bool
    {
        return ExceptionHandler::handle(function () use ($floor) {
            return $this->floorRepository->delete($floor->id);
        });
    }
}
