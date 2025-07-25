<?php

namespace App\Repositories;

use App\Models\ShopDeposit;
use App\Repositories\Contracts\ShopDepositRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Repositories\Traits\CacheableRepositoryTrait;
use App\Repositories\Traits\BaseRepositoryTrait;
use App\Repositories\Traits\BulkDeletesRepositoryTrait;
use App\Repositories\Traits\SoftDeletesRepositoryTrait;
use App\Repositories\Traits\OptionalRepositoryTrait;

class ShopDepositRepository implements ShopDepositRepositoryInterface
{
    use CacheableRepositoryTrait, BaseRepositoryTrait, BulkDeletesRepositoryTrait, SoftDeletesRepositoryTrait, OptionalRepositoryTrait;



    protected function getModel(): Model
    {
         return new ShopDeposit();
    }

    public function getDataTableData(Request $request): LengthAwarePaginator
    {
        // Implement the logic to retrieve data for the data table
    }

    public function create($agentUnit, array $attributes): ?Model
    {
        return $this->getModel()->create([
            "shop_id" => $agentUnit->shop?->id,
            "agent_id" => $agentUnit->agent?->id,
            "agent_unit_id" => $agentUnit->id,
            "amount" => $agentUnit->sale_price,
            "added_date" => $attributes["date"],
            "added_by" => auth("admin")->user()->id,
        ]);
    }
}
