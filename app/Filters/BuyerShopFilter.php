<?php

namespace App\Filters;

use App\Filters\BaseFilter;
use Illuminate\Database\Eloquent\Builder;

class BuyerShopFilter extends BaseFilter
{
    protected array $filterableFields = [
        'search.value' => 'filterByGlobalSearch',
        'buyerFilter' => 'filterByBuyer',
        'agentFilter' => 'filterByAgent',
        'startDateFilter' => 'filterByStartDate',
        'endDateFilter' => 'filterByEndDate',
    ];

    protected function filterByGlobalSearch(Builder $query, string $value): void
    {
        $query->where(function ($q) use ($value) {
            $q->where('buyers.id', $value)
                ->where('agents.id', $value)
                ->where('shops.number', $value)
                ->where('buyer_shops.sell_amount', $value)
                ->where('shops.uuid', $value)
                ->where('agent_units.commission', $value);
        });
    }

    protected function filterByBuyer(Builder $query, string $value): void
    {
        $query->where('buyers.id', $value);
    }

    protected function filterByAgent(Builder $query, string $value): void
    {
        $query->where('agents.id', $value);
    }

    protected function filterByStartDate(Builder $query, string $date): void
    {
        $query->where('buyer_shops.created_at', '>=', $date);
    }

    protected function filterByEndDate(Builder $query, string $date): void
    {
        $query->where('buyer_shops.created_at', '<=', $date);
    }
}
