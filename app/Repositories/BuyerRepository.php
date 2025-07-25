<?php

namespace App\Repositories;

use App\Filters\BuyerFilter;
use App\Models\Buyer;
use App\Repositories\Contracts\BuyerRepositoryInterface;
use App\Repositories\Traits\BaseRepositoryTrait;
use App\Repositories\Traits\BulkDeletesRepositoryTrait;
use App\Repositories\Traits\CacheableRepositoryTrait;
use App\Repositories\Traits\OptionalRepositoryTrait;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class BuyerRepository implements BuyerRepositoryInterface
{
    use CacheableRepositoryTrait, OptionalRepositoryTrait, BaseRepositoryTrait, BulkDeletesRepositoryTrait;

    protected BuyerFilter $filter;

    public function __construct(BuyerFilter $filter)
    {
        $this->filter = $filter;
    }

    public function getModel(): \Illuminate\Database\Eloquent\Model
    {
        return new Buyer();
    }

    public function getDataTableData(Request $request): LengthAwarePaginator
    {
        $length = (int) $request->input('length', 10);
        $start = (int) $request->input('start', 0);
        $page = max(1, (int) floor($start / $length) + 1); // Ensure valid page number

        $query = $this->getModel()::with(['status'])->select(['id', 'username', 'email', 'phone', 'status_id', 'created_at']);
        $filtered = $this->filter->apply($query, $request);

        // Paginate the query results with order by `id` descending
        // Calculate current page as (start offset / page length) + 1
        return $filtered->orderBy('id', 'desc')->paginate($length, ['*'], 'page', $page);
    }
}
