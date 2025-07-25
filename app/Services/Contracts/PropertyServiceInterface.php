<?php

namespace App\Services\Contracts;

use App\Models\Property;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

interface PropertyServiceInterface
{
    public function getAllProperties(): LengthAwarePaginator|Collection;

    public function getDataTable(Request $request): array;

    public function getPropertyById(mixed $id): ?Property;

    public function storeProperty(array $data): ?Property;

    public function updateProperty(Property $property, array $data): Property;

    public function deleteProperty(Property $property, $password): bool;

    public function deleteBulkProperties(array $ids): bool;
}
