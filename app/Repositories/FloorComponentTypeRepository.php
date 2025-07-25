<?php

namespace App\Repositories;

use App\Models\FloorComponentType;
use App\Repositories\Contracts\FloorComponentTypeRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Repositories\Traits\CacheableRepositoryTrait;
use App\Repositories\Traits\BaseRepositoryTrait;
use App\Repositories\Traits\BulkDeletesRepositoryTrait;
use App\Repositories\Traits\SoftDeletesRepositoryTrait;
use App\Repositories\Traits\OptionalRepositoryTrait;

class FloorComponentTypeRepository implements FloorComponentTypeRepositoryInterface
{
    use CacheableRepositoryTrait, BaseRepositoryTrait, BulkDeletesRepositoryTrait, SoftDeletesRepositoryTrait, OptionalRepositoryTrait;

    protected function getModel(): Model
    {
         return new FloorComponentType();
    }

    public function getDataTableData(Request $request): LengthAwarePaginator
    {
        // Implement the logic to retrieve data for the data table
    }
}
