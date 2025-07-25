<?php

namespace App\Services\Contracts;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Support\Collection;

interface ShopServiceInterface
{
    public function getAllShops(): LengthAwarePaginator|DatabaseCollection|Collection;

    public function getDataTable(Request $request): array;

    public function getShopById(mixed $id): ?Shop;

    public function storeShop(array $data): ?Shop;

    public function updateShop(Shop $shop, array $data): Shop;

    public function deleteShop(mixed $id, $password): bool;
}
