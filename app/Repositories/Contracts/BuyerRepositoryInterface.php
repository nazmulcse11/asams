<?php

namespace App\Repositories\Contracts;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

interface BuyerRepositoryInterface
{
    public function getDataTableData(Request $request): LengthAwarePaginator;
}
