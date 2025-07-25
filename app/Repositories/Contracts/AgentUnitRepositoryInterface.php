<?php

namespace App\Repositories\Contracts;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

interface AgentUnitRepositoryInterface
{
    public function getDataTableData(Request $request): LengthAwarePaginator;
}