<?php

namespace App\Services\Contracts;

use App\Models\BuyerShop;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Support\Collection;

interface BuyerShopServiceInterface
{
    public function getAllBuyerShops(): LengthAwarePaginator|DatabaseCollection|Collection;

    public function getDataTable(Request $request): array;

    public function getBuyerShopById(mixed $id): ?BuyerShop;

    public function storeBuyerShop(array $data): ?BuyerShop;

    public function updateBuyerShop(BuyerShop $buyerShop, array $data): BuyerShop;

    public function deleteBuyerShop(BuyerShop $buyerShop): bool;

    public function deleteBulkBuyerShops(array $ids): bool;
}