<?php

namespace App\Repositories;

use App\Filters\BlockFilter;
use App\Models\Block;
use App\Repositories\Contracts\BlockRepositoryInterface;
use App\Repositories\Traits\BaseRepositoryTrait;
use App\Repositories\Traits\BulkDeletesRepositoryTrait;
use App\Repositories\Traits\CacheableRepositoryTrait;
use App\Repositories\Traits\OptionalRepositoryTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class BlockRepository implements Contracts\BlockRepositoryInterface
{
    use BaseRepositoryTrait, CacheableRepositoryTrait, OptionalRepositoryTrait, BulkDeletesRepositoryTrait;

    protected BlockFilter $filter;

    public function __construct(BlockFilter $filter)
    {
        $this->filter = $filter;
    }

    protected function getModel(): Model
    {
        return new Block();
    }

    public function dropdown($floor_id): Collection
    {
        return Block::where('floor_id', $floor_id)
            ->select(["id", "name"])
            ->orderBy('name', 'asc')
            ->get();
    }

    public function getDataTableData(Request $request): LengthAwarePaginator
    {
        $length = (int) $request->input('length', 10);
        $start = (int) $request->input('start', 0);
        $page = max(1, (int) floor($start / $length) + 1); // Ensure valid page number

        $query = $this->getModel()::with([
            'floor:id,name,property_id',
            'floor.property:id,name',
        ])->select([
            'id',
            'name',
            'floor_id',
            'description',
            'created_at']);
        $filtered = $this->filter->apply($query, $request);

        // Paginate the query results with order by `id` descending
        // Calculate current page as (start offset / page length) + 1
        return $filtered->orderBy('id', 'desc')->paginate($length, ['*'], 'page', $page);
    }
}
