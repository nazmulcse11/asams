<?php

namespace App\Repositories\Contracts;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

interface BuyerInstallmentRepositoryInterface
{
    public function getDataTableData(Request $request): LengthAwarePaginator;
}