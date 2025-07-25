<?php

namespace App\Services\Contracts;

use App\Models\PropertyType;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Support\Collection;

interface PropertyTypeServiceInterface
{
    public function getAllPropertyTypes(): LengthAwarePaginator|DatabaseCollection|Collection;

    public function getDataTable(Request $request): array;

    public function getPropertyTypeById(mixed $id): ?PropertyType;

    public function storePropertyType(array $data): ?PropertyType;

    public function updatePropertyType(PropertyType $propertyType, array $data): PropertyType;

    public function deletePropertyType(PropertyType $propertyType): bool;

    public function deleteBulkPropertyTypes(array $ids): bool;
}