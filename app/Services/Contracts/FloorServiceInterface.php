<?php

namespace App\Services\Contracts;

use App\Models\Floor;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Support\Collection;

interface FloorServiceInterface
{
    public function getAllFloors(): LengthAwarePaginator|DatabaseCollection|Collection;

    public function getDataTable(Request $request): array;

    public function getFloorById(mixed $id): ?Floor;

    public function storeFloor(array $data): ?Floor;

    public function updateFloor(Floor $floor, array $data): Floor;

    public function deleteFloor(Floor $floor): bool;

}
