<?php

namespace App\Repositories\Contracts;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

interface AgentShopRepositoryInterface
{
    public function getDataTableData(Request $request): LengthAwarePaginator;
}