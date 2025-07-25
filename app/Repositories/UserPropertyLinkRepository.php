<?php

namespace App\Repositories;

use App\Models\UserPropertyLink;
use App\Repositories\Contracts\UserPropertyLinkRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Repositories\Traits\CacheableRepositoryTrait;
use App\Repositories\Traits\BaseRepositoryTrait;
use App\Repositories\Traits\BulkDeletesRepositoryTrait;
use App\Repositories\Traits\SoftDeletesRepositoryTrait;
use App\Repositories\Traits\OptionalRepositoryTrait;

class UserPropertyLinkRepository implements UserPropertyLinkRepositoryInterface
{
    use CacheableRepositoryTrait, BaseRepositoryTrait, BulkDeletesRepositoryTrait, SoftDeletesRepositoryTrait, OptionalRepositoryTrait;


    protected function getModel(): Model
    {
         return new UserPropertyLink();
    }

    public function getDataTableData(Request $request): LengthAwarePaginator
    {
        // Implement the logic to retrieve data for the data table
    }
}
