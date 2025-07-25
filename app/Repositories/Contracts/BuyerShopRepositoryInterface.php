<?php

namespace App\Repositories\Contracts;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

interface BuyerShopRepositoryInterface
{
    public function getDataTableData(Request $request): LengthAwarePaginator;
}