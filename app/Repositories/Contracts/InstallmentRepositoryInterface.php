<?php

namespace App\Repositories\Contracts;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

interface InstallmentRepositoryInterface
{
    public function getDataTableData(Request $request, mixed $agentUnitId): LengthAwarePaginator;
}
