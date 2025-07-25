<?php

namespace App\Services;

use App\Repositories\Contracts\PropertyTypeRepositoryInterface;
use App\Services\Contracts\PropertyTypeServiceInterface;
use App\Models\PropertyType;
use App\Services\Traits\BaseServiceTrait;
use App\Utils\ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Support\Collection;

class PropertyTypeService implements PropertyTypeServiceInterface
{
    use BaseServiceTrait;

    protected PropertyTypeRepositoryInterface $repository;

    public function __construct(PropertyTypeRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    // Implement service methods
    public function getAllPropertyTypes(): LengthAwarePaginator|DatabaseCollection|Collection
    {
        return ExceptionHandler::handle(function () {
            return $this->repository->all();
        });
    }

    public function getPropertyTypeById(mixed $id): ?PropertyType
    {
        // TODO: Implement getPropertyTypeById() method.
    }

    public function storePropertyType(array $data): ?PropertyType
    {
        // TODO: Implement storePropertyType() method.
    }

    public function updatePropertyType(PropertyType $propertyType, array $data): PropertyType
    {
        // TODO: Implement updatePropertyType() method.
    }

    public function deletePropertyType(PropertyType $propertyType): bool
    {
        // TODO: Implement deletePropertyType() method.
    }

    public function deleteBulkPropertyTypes(array $ids): bool
    {
        // TODO: Implement deleteBulkPropertyTypes() method.
    }
}
