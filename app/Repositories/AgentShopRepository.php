<?php

namespace App\Repositories;

use App\Models\AgentShop;
use App\Repositories\Contracts\AgentShopRepositoryInterface;

use App\Filters\AgentShopFilter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Repositories\Traits\CacheableRepositoryTrait;
use App\Repositories\Traits\BaseRepositoryTrait;
use App\Repositories\Traits\BulkDeletesRepositoryTrait;
use App\Repositories\Traits\SoftDeletesRepositoryTrait;
use App\Repositories\Traits\OptionalRepositoryTrait;

class AgentShopRepository implements AgentShopRepositoryInterface
{
    use CacheableRepositoryTrait, BaseRepositoryTrait, BulkDeletesRepositoryTrait, SoftDeletesRepositoryTrait, OptionalRepositoryTrait;

    protected AgentShopFilter $filter;

    public function __construct(AgentShopFilter $filter)
    {
        $this->filter = $filter;
    }

    protected function getModel(): Model
    {
         return new AgentShop();
    }

    public function getDataTableData(Request $request): LengthAwarePaginator
    {
        // Implement the logic to retrieve data for the data table
    }
}
