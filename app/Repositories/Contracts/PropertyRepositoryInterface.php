<?php

namespace App\Repositories\Contracts;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface PropertyRepositoryInterface
{
    public function getDataTableData(Request $request): LengthAwarePaginator;
}
