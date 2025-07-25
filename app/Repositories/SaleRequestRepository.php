<?php

namespace App\Repositories;

use App\Models\SaleRequest;
use App\Repositories\Contracts\SaleRequestRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Repositories\Traits\CacheableRepositoryTrait;
use App\Repositories\Traits\BaseRepositoryTrait;
use App\Repositories\Traits\OptionalRepositoryTrait;

class SaleRequestRepository implements SaleRequestRepositoryInterface
{
    use CacheableRepositoryTrait, BaseRepositoryTrait, OptionalRepositoryTrait;

    protected function getModel(): Model
    {
        return new SaleRequest();
    }

    public function getDataTableData(Request $request): LengthAwarePaginator
    {
        $length = (int) $request->input('length', 10);
        $start = (int) $request->input('start', 0);
        $page = max(1, (int) floor($start / $length) + 1); // Ensure valid page number

        $query = $this->getModel()::with(['property', 'agent', 'employee', "paymentType"])
            ->select(['id', 'property_id', 'agent_id', 'employee_id', 'buyer_name', 'address', 'mobile', 'nid_number', 'proposed_price', 'payment_type_id', 'number_of_installment', 'created_at']);
//        $filtered = $this->filter->apply($query, $request);

        // Paginate the query results with order by `id` descending
        // Calculate current page as (start offset / page length) + 1
        return $query->orderBy('id', 'desc')->paginate($length, ['*'], 'page', $page);
    }
}
