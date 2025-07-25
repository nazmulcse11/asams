<?php

namespace App\Repositories\Contracts;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

interface FloorComponentTypeRepositoryInterface
{
    public function getDataTableData(Request $request): LengthAwarePaginator;
}