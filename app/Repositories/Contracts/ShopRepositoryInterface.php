<?php

namespace App\Repositories\Contracts;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

interface ShopRepositoryInterface
{
    public function getDataTableData(Request $request): LengthAwarePaginator;
}