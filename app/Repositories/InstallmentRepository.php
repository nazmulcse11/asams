<?php

namespace App\Repositories;

use App\Models\Installment;
use App\Repositories\Contracts\InstallmentRepositoryInterface;
use App\Filters\InstallmentFilter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Repositories\Traits\CacheableRepositoryTrait;
use App\Repositories\Traits\BaseRepositoryTrait;
use App\Repositories\Traits\BulkDeletesRepositoryTrait;
use App\Repositories\Traits\SoftDeletesRepositoryTrait;
use App\Repositories\Traits\OptionalRepositoryTrait;
use Illuminate\Support\Facades\DB;

class InstallmentRepository implements InstallmentRepositoryInterface
{
    use CacheableRepositoryTrait, BaseRepositoryTrait, BulkDeletesRepositoryTrait, SoftDeletesRepositoryTrait, OptionalRepositoryTrait;

    protected InstallmentFilter $filter;

    public function __construct(InstallmentFilter $filter)
    {
        $this->filter = $filter;
    }

    protected function getModel(): Model
    {
        return new Installment();
    }

    public function getDataTableData(Request $request, mixed $agentUnitId): LengthAwarePaginator
    {
        $length = (int) $request->input('length', 10);
        $start = (int) $request->input('start', 0);
        $page = max(1, (int) floor($start / $length) + 1); // Ensure valid page number

        $query = $this->getModel()::with([
            'buyer:id,username',
            'shop:id,number,block_id',
            'shop.block:id,name,floor_id',
            'shop.block.floor:id,name,property_id',
            'shop.block.floor.property:id,name',
            'agentUnit:id,sale_price',
            'paymentType:id,name'])
            ->select(['id', 'buyer_id', 'agent_unit_id', 'shop_id', 'installment_no', 'installment_amount', 'paid_amount', 'due_amount', 'payment_type_id', 'created_at'])
            ->where('agent_unit_id', $agentUnitId);
        $filtered = $this->filter->apply($query, $request);

        // Paginate the query results with order by `id` descending
        // Calculate current page as (start offset / page length) + 1
        return $filtered->orderBy('id', 'desc')->paginate($length, ['*'], 'page', $page);
    }
}
