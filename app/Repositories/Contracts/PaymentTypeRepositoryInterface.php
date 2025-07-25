<?php

namespace App\Repositories\Contracts;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

interface PaymentTypeRepositoryInterface
{
    public function getDataTableData(Request $request): LengthAwarePaginator;
}