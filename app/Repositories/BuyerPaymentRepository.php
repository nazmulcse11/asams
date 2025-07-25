<?php

namespace App\Repositories;

use App\Filters\BuyerPaymentFilter;
use App\Models\BuyerPayment;
use App\Repositories\Contracts\BuyerPaymentRepositoryInterface;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Repositories\Traits\CacheableRepositoryTrait;
use App\Repositories\Traits\BaseRepositoryTrait;
use App\Repositories\Traits\BulkDeletesRepositoryTrait;
use App\Repositories\Traits\SoftDeletesRepositoryTrait;
use App\Repositories\Traits\OptionalRepositoryTrait;
use Illuminate\Support\Facades\DB;

class BuyerPaymentRepository implements BuyerPaymentRepositoryInterface
{
    use CacheableRepositoryTrait, BaseRepositoryTrait, BulkDeletesRepositoryTrait, SoftDeletesRepositoryTrait, OptionalRepositoryTrait;

    protected BuyerPaymentFilter $filter;

    public function __construct(BuyerPaymentFilter $filter)
    {
        $this->filter = $filter;
    }

    protected function getModel(): Model
    {
        return new BuyerPayment();
    }

    public function getDataTableData(Request $request): LengthAwarePaginator
    {
        $length = (int) $request->input('length', 10);
        $start = (int) $request->input('start', 0);
        $page = max(1, (int) floor($start / $length) + 1); // Ensure valid page number

        $query = $this->getModel()::with(['buyer:id,username', "addedBy:id,username", "verifiedBy:id,username", "paymentMode:id,name"])
                ->select(['id', 'buyer_id', 'payment_amount', 'payment_mode_id', 'payment_date', 'payment_ref', 'added_by', 'verified_by', 'verified_at', 'created_at']);

        $filter = $this->filter->apply($query, $request);

        // Paginate the query results with order by `id` descending
        // Calculate current page as (start offset / page length) + 1
        return $filter->orderBy('id', 'desc')->paginate($length, ['*'], 'page', $page);
    }

    public function create(array $attributes): ?BuyerPayment
    {
        unset($attributes["agent_unit_id"]);
        $attributes["added_by"] = auth("admin")->user()->id;
        $attributes["payment_date"] = Carbon::now();;
        return $this->getModel()->create($attributes);
    }
}
