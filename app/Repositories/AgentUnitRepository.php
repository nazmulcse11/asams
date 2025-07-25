<?php

namespace App\Repositories;

use App\Models\AgentUnit;
use App\Repositories\Contracts\AgentUnitRepositoryInterface;
use App\Filters\AgentUnitFilter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Repositories\Traits\CacheableRepositoryTrait;
use App\Repositories\Traits\BaseRepositoryTrait;
use App\Repositories\Traits\BulkDeletesRepositoryTrait;
use App\Repositories\Traits\SoftDeletesRepositoryTrait;
use App\Repositories\Traits\OptionalRepositoryTrait;
use Illuminate\Support\Facades\DB;

class AgentUnitRepository implements AgentUnitRepositoryInterface
{
    use CacheableRepositoryTrait, BaseRepositoryTrait, BulkDeletesRepositoryTrait, SoftDeletesRepositoryTrait, OptionalRepositoryTrait;

    protected AgentUnitFilter $filter;

    public function __construct(AgentUnitFilter $filter)
    {
        $this->filter = $filter;
    }

    protected function getModel(): Model
    {
         return new AgentUnit();
    }

    public function getDataTableData(Request $request): LengthAwarePaginator
    {
        $length = (int) $request->input('length', 10);
        $start = (int) $request->input('start', 0);

        // Paginate the query results with order by `id` descending
        // Calculate current page as (start offset / page length) + 1
        $page = max(1, (int) floor($start / $length) + 1);

        $query = $this->getModel()::with([
            'agent:id,username',
            'shop:id,number,block_id',
            'shop.block:id,name,floor_id',
            'shop.block.floor:id,name,property_id',
            'shop.block.floor.property:id,name',
            'status:id,name'])
            ->select([
                'id',
                'agent_id',
                'shop_id',
                'sale_price',
                'status_id',
                'created_at']);

        $filtered = $this->filter->apply($query, $request);

        return $filtered->orderBy('id', 'desc')->paginate($length, ['*'], 'page', $page);
    }

    public function getUnverifiedDataTableData(Request $request): LengthAwarePaginator
    {
        $length = (int) $request->input('length', 10);
        $start = (int) $request->input('start', 0);

        // Paginate the query results with order by `id` descending
        // Calculate current page as (start offset / page length) + 1
        $page = max(1, (int) floor($start / $length) + 1);

        $query = $this->getModel()::with([
            'agent:id,username',
            'shop:id,number,block_id',
            'shop.block:id,name,floor_id',
            'shop.block.floor:id,name,property_id',
            'shop.block.floor.property:id,name',
            'status:id,name'])
            ->select([
                'id',
                'agent_id',
                'shop_id',
                'sale_price',
                'status_id',
                'created_at'])
            ->whereHas("status", function($query) {
                $query->where("name", "Inactive");
            })
            ->whereNull("approve_by");

        $filtered = $this->filter->apply($query, $request);

        return $filtered->orderBy('id', 'desc')->paginate($length, ['*'], 'page', $page);
    }

    public function approve(mixed $agentUnitId): bool
    {
        $status = $this
            ->getModel()
            ->where('id', $agentUnitId)
            ->update([
                'approve_by' => auth("admin")->user()->id,
                "status_id" => '1'
            ]);

        return $status;
    }

    public function verify(mixed $agentUnit, array $data): bool
    {
        $status = $this
            ->getModel()
            ->where('id', $agentUnit->id)
            ->update([
                'approve_by' => auth("admin")->user()->id,
                'security_money' => $data['security_money'],
                'commission' => $data['commission'],
                "status_id" => '1'
            ]);

        if ($status) {
            $this->getModel()
                ->where('shop_id', $agentUnit->shop_id)
                ->where("id", "!=", $agentUnit->id)
                ->update(['status_id' => '3']);
        }

        return $status;
    }

    public function getVerifiedDataTableData(Request $request): LengthAwarePaginator
    {
        $length = (int) $request->input('length', 10);
        $start = (int) $request->input('start', 0);

        // Paginate the query results with order by `id` descending
        // Calculate current page as (start offset / page length) + 1
        $page = max(1, (int) floor($start / $length) + 1);

        $query = $this->getModel()::with([
            'agent:id,username',
            'shop:id,number,block_id',
            'shop.block:id,name,floor_id',
            'shop.block.floor:id,name,property_id',
            'shop.block.floor.property:id,name',
            'status:id,name',
            'shopDeposit',
            "installments"])
            ->select(['id', 'agent_id', 'shop_id', 'commission', 'security_money', 'security_deposit_paid', 'sale_price', 'status_id', 'created_at'])
            ->whereHas("status", function($query) {
                $query->where("name", "Active");
            })
            ->whereNotNull("approve_by");

        $filtered = $this->filter->apply($query, $request);

        return $filtered->orderBy('id', 'desc')->paginate($length, ['*'], 'page', $page);
    }

    public function create(array $attributes): ?AgentUnit
    {
        return $this->getModel()->create(array_merge($attributes, [
            'added_by' => auth("admin")->user()->id,
            "status_id" => '2',
        ]));
    }

    public function paidSecurityDeposit(AgentUnit $agentUnit): bool
    {
        return $agentUnit->update([
            "security_deposit_paid" => true
        ]);
    }
}
