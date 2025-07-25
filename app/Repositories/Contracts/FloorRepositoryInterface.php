<?php

namespace App\Repositories\Contracts;

use App\Models\Floor;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface FloorRepositoryInterface
{

    public function findByCriteria(array $select = ["*"], array $conditions = [], array $with = []): Collection;

    public function getDataTableData(Request $request): LengthAwarePaginator;

}
