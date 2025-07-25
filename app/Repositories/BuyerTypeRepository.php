<?php

namespace App\Repositories;

use App\Models\BuyerType;
use App\Repositories\Contracts\BuyerTypeRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Repositories\Traits\BaseRepositoryTrait;
use App\Repositories\Traits\BulkDeletesRepositoryTrait;
use App\Repositories\Traits\SoftDeletesRepositoryTrait;
use App\Repositories\Traits\OptionalRepositoryTrait;

class BuyerTypeRepository implements BuyerTypeRepositoryInterface
{
    use BaseRepositoryTrait, BulkDeletesRepositoryTrait, SoftDeletesRepositoryTrait, OptionalRepositoryTrait;

    protected function getModel(): Model
    {
         return new BuyerType();
    }

    public function getDataTableData(Request $request): LengthAwarePaginator
    {
        // Implement the logic to retrieve data for the data table
    }
}
