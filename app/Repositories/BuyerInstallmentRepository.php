<?php

namespace App\Repositories;

use App\Models\BuyerInstallment;
use App\Repositories\Contracts\BuyerInstallmentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Repositories\Traits\CacheableRepositoryTrait;
use App\Repositories\Traits\BaseRepositoryTrait;
use App\Repositories\Traits\BulkDeletesRepositoryTrait;
use App\Repositories\Traits\SoftDeletesRepositoryTrait;
use App\Repositories\Traits\OptionalRepositoryTrait;

class BuyerInstallmentRepository implements BuyerInstallmentRepositoryInterface
{
    use CacheableRepositoryTrait, BaseRepositoryTrait, BulkDeletesRepositoryTrait, SoftDeletesRepositoryTrait, OptionalRepositoryTrait;


    protected function getModel(): Model
    {
        return new BuyerInstallment();
    }

    public function getDataTableData(Request $request): LengthAwarePaginator
    {
        // Implement the logic to retrieve data for the data table
    }
}
