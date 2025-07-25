<?php

namespace App\Services\Contracts;

use App\Models\SaleRequest;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Support\Collection;

interface SaleRequestServiceInterface
{
    public function getAllSaleRequests(): LengthAwarePaginator|DatabaseCollection|Collection;

    public function getDataTable(Request $request): array;

    public function getSaleRequestById(mixed $id): ?SaleRequest;

    public function storeSaleRequest(array $data): ?SaleRequest;

    public function deleteSaleRequest(SaleRequest $saleRequest): bool;

}
