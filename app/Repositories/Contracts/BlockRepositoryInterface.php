<?php

namespace App\Repositories\Contracts;

use App\Models\Block;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface BlockRepositoryInterface
{
    public function getDataTableData(Request $request): LengthAwarePaginator;

}
