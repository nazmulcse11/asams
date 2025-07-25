<?php

namespace App\Repositories;

use App\Models\PropertyType;
use App\Repositories\Contracts\PropertyTypeRepositoryInterface;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Repositories\Traits\CacheableRepositoryTrait;
use App\Repositories\Traits\BaseRepositoryTrait;
use App\Repositories\Traits\BulkDeletesRepositoryTrait;
use App\Repositories\Traits\SoftDeletesRepositoryTrait;
use App\Repositories\Traits\OptionalRepositoryTrait;

class PropertyTypeRepository implements PropertyTypeRepositoryInterface
{
    use CacheableRepositoryTrait, BaseRepositoryTrait, BulkDeletesRepositoryTrait, SoftDeletesRepositoryTrait, OptionalRepositoryTrait;

    protected function getModel(): Model
    {
        return new PropertyType();
    }

    public function getDataTableData(Request $request): LengthAwarePaginator
    {
        // Implement the logic to retrieve data for the data table
    }
}
