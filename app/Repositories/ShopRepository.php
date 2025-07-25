<?php

namespace App\Repositories;

use App\Filters\ShopBulkFilter;
use App\Models\Shop;
use App\Models\ShopFeature;
use App\Repositories\Contracts\ShopRepositoryInterface;

use App\Filters\ShopFilter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Repositories\Traits\CacheableRepositoryTrait;
use App\Repositories\Traits\BaseRepositoryTrait;
use App\Repositories\Traits\BulkDeletesRepositoryTrait;
use App\Repositories\Traits\SoftDeletesRepositoryTrait;
use App\Repositories\Traits\OptionalRepositoryTrait;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection as SupportCollection;
use Illuminate\Support\Facades\Cache;

class ShopRepository implements ShopRepositoryInterface
{
    use CacheableRepositoryTrait, BaseRepositoryTrait, BulkDeletesRepositoryTrait, SoftDeletesRepositoryTrait, OptionalRepositoryTrait;

    protected ShopFilter $filter;
    protected ShopBulkFilter $shopBulkFilter;

    public function __construct(ShopFilter $filter,  ShopBulkFilter $shopBulkFilter)
    {
        $this->filter = $filter;
        $this->shopBulkFilter = $shopBulkFilter;
    }

    public function getModel(): Model
    {
         return new Shop();
    }

    public function getDataTableData(Request $request): LengthAwarePaginator
    {
        $length = (int) $request->input('length', 10);
        $start = (int) $request->input('start', 0);
        $page = max(1, (int) floor($start / $length) + 1); // Ensure valid page number

        $query = $this->getModel()::with(['block:id,name,floor_id', 'block.floor:id,name,property_id', 'block.floor.property:id,name'])
            ->select([
                'id',
                'block_id',
                'number',
                'area',
                'length',
                'width',
                'total_area',
                'length_half_corridor',
                'width_full_shop',
                'created_at'
            ]);
        $filtered = $this->filter->apply($query, $request);

        // Paginate the query results with order by `id` descending
        // Calculate current page as (start offset / page length) + 1
        return $filtered->orderBy('id', 'desc')->paginate($length, ['*'], 'page', $page);
    }

    public function filterShop(Request $request)
    {
        $query = $this->getModel()::with([
            "block:id,name,floor_id",
            "block.floor:id,name",
        ]);

        return $this->shopBulkFilter->apply($query, $request)->get();
    }

    public function bulkUpdate(array $ids, array $attributes): bool
    {
        foreach ($ids as $id) {
            $record = $this->getModel()->find($id);
            $record->update($attributes);
        }
        return true;
    }

    public function dropdown(array $select = ["*"], array $conditions = [], ): SupportCollection|\Illuminate\Database\Eloquent\Collection|\Illuminate\Contracts\Pagination\LengthAwarePaginator|Paginator|null
    {
        return $this
            ->getModel()
            ->select($select)
            ->when(!empty($conditions), function ($query) use ($conditions) {
                foreach ($conditions as $field => $value) {
                    if ($field === 'buyer') {
                        // Filter shops via the shops relationship
                        $query->whereHas('buyer', function ($q) use ($value) {
                            $q->where('buyers.id', $value);
                        });
                    } elseif (is_array($value) && count($value) === 2) {
                        // Example: ['price' => ['>', 100]] → WHERE price > 100
                        $query->where($field, $value[0], $value[1]);
                    } else {
                        // Default: WHERE field = value
                        $query->where($field, '=', $value);
                    }
                }
            })
            ->latest()
            ->get();
    }

    public function fetchShopsByFloorAgent(mixed $agentId, mixed $floorId)
    {
        $shops = $this->getModel()->whereHas('block.floor', function ($query) use ($floorId) {
            $query->where('id', $floorId);
        })
            ->whereHas('agentUnit', function ($query) use ($agentId) {
                $query->where('agent_id', $agentId)
                    ->whereNotNull('approve_by');
            })
            ->distinct()
            ->get();
        return $shops;
    }
}
