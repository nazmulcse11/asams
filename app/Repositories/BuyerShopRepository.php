<?php

namespace App\Repositories;

use App\Filters\BuyerShopFilter;
use App\Models\BuyerShop;
use App\Repositories\Contracts\BuyerShopRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Repositories\Traits\CacheableRepositoryTrait;
use App\Repositories\Traits\BaseRepositoryTrait;
use App\Repositories\Traits\BulkDeletesRepositoryTrait;
use App\Repositories\Traits\SoftDeletesRepositoryTrait;
use App\Repositories\Traits\OptionalRepositoryTrait;

class BuyerShopRepository implements BuyerShopRepositoryInterface
{
    use CacheableRepositoryTrait, BaseRepositoryTrait, BulkDeletesRepositoryTrait, SoftDeletesRepositoryTrait, OptionalRepositoryTrait;

    public function __construct(protected BuyerShopFilter $filter)
    {}

    protected function getModel(): Model
    {
         return new BuyerShop();
    }

    public function getDataTableData(Request $request): LengthAwarePaginator
    {
        $length = (int) $request->input('length', 10);
        $start = (int) $request->input('start', 0);
        $page = max(1, (int) floor($start / $length) + 1); // Ensure valid page number

        $query = $this->getModel()::join('shops', 'buyer_shops.shop_id', '=', 'shops.id')
            ->join('buyers', 'buyer_shops.buyer_id', '=', 'buyers.id')
            ->join('agents', 'buyer_shops.agent_id', '=', 'agents.id')
            ->join('agent_units', 'agent_units.agent_id', '=', 'agents.id')
            ->whereNotNull('agent_units.approve_by')
            ->selectRaw("
                buyer_shops.id as id,
                shops.uuid as uuid,
                buyers.username as buyer,
                buyers.id as buyer_id,
                agents.username as agent,
                agents.id as agent_id,
                shops.number as number,
                buyer_shops.created_at as created_at,
                buyer_shops.sell_amount as sell_amount,
                MAX(agent_units.commission) as commission
                ")
            ->groupBy([
                'buyer_shops.id',
                'shops.uuid',
                'buyers.username',
                'buyers.id',
                'agents.username',
                'agents.id',
                'shops.number',
                'buyer_shops.created_at',
                'buyer_shops.sell_amount',
            ]);
        $filtered = $this->filter->apply($query, $request);

        // Paginate the query results with order by `id` descending
        // Calculate current page as (start offset / page length) + 1
        return $filtered->orderBy('id', 'desc')->paginate($length, ['*'], 'page', $page);
    }
}
