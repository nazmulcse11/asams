<?php

namespace App\Services\Contracts;

use App\Models\FloorComponent;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Support\Collection;

interface FloorComponentServiceInterface
{

    public function getDataTable(Request $request): array;

    public function getFloorComponentById(mixed $id): ?FloorComponent;

    public function storeFloorComponent(array $data): ?FloorComponent;

    public function updateFloorComponent(array $data): FloorComponent;

    public function deleteFloorComponent(FloorComponent $floorComponent): bool;

}
