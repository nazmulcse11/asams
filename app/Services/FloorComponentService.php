<?php

namespace App\Services;

use App\Repositories\Contracts\FloorComponentRepositoryInterface;
use App\Repositories\Contracts\FloorComponentTypeRepositoryInterface;
use App\Services\Contracts\FloorComponentServiceInterface;
use App\Models\FloorComponent;
use App\Services\Traits\BaseServiceTrait;
use App\Utils\ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Support\Collection;

class FloorComponentService implements FloorComponentServiceInterface
{
    use BaseServiceTrait;

    protected FloorComponentRepositoryInterface $repository;
    protected FloorComponentTypeRepositoryInterface $floorComponentTypeRepository;

    public function __construct(FloorComponentRepositoryInterface $repository, FloorComponentTypeRepositoryInterface $floorComponentTypeRepository)
    {
        $this->repository = $repository;
        $this->floorComponentTypeRepository = $floorComponentTypeRepository;
    }

    public function getFloorComponentById(mixed $id): ?FloorComponent
    {
        return ExceptionHandler::handle(function () use ($id) {
            return $this->repository->findById($id, ["type"]);
        });
    }

    public function storeFloorComponent(array $data): ?FloorComponent
    {
        return ExceptionHandler::handle(function () use ($data) {
            $type = $this->floorComponentTypeRepository->all(["*"], ["name" => $data["type"]])->first();
            $component = $this->repository->create(array_merge($data, ["floor_component_type_id" => $type->id]));
            return $this->getFloorComponentById($component->id);
        });
    }

    public function updateFloorComponent(array $data): FloorComponent
    {
        return ExceptionHandler::handle(function () use ($data) {
            return $this->repository->update($data["id"], $data);
        });
    }

    public function deleteFloorComponent(FloorComponent $floorComponent): bool
    {
        return ExceptionHandler::handle(function () use ($floorComponent) {
            return $this->repository->delete($floorComponent->id);
        });
    }
}
