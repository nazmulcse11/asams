<?php

namespace App\Services\Contracts;

use App\Models\Buyer;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface BuyerServiceInterface
{

    public function getAllBuyers(): LengthAwarePaginator|DatabaseCollection|Collection;

    public function getDataTable(Request $request): array;

    public function getBuyerById(mixed $id): ?Buyer;

    public function storeBuyer(array $data): ?Buyer;

    public function updateBuyer(Buyer $buyer, array $data): Buyer;

    public function deleteBuyer(Buyer $buyer): bool;

    public function deleteBulkBuyers(array $ids): bool;
}
