<?php

namespace App\Filters;

use App\Filters\BaseFilter;
use Illuminate\Database\Eloquent\Builder;

class BuyerPaymentFilter extends BaseFilter
{
    protected array $filterableFields = [
        'search.value' => 'filterByGlobalSearch',
        'buyerFilter' => 'filterByBuyer',
        'agentUnitFilter' => 'filterByAgentUnit',
        'startDateFilter' => 'filterByStartDate',
        'endDateFilter' => 'filterByEndDate',
    ];

    protected function filterByGlobalSearch(Builder $query, string $value): void
    {
        $query->where(function ($q) use ($value) {
            $q->where('name', 'like', "%{$value}%");
        });
    }

    protected function filterByBuyer(Builder $query, string $value): void
    {
        $query->where('buyer_id', '=', $value);
    }

    protected function filterByAgentUnit(Builder $query, string $value): void
    {
        $query->whereHas('installment', function ($q) use ($value) {
            $q->where('agent_unit_id', $value);
        });
    }

    protected function filterByStartDate(Builder $query, string $date): void
    {
        $query->where('created_at', '>=', $date);
    }

    protected function filterByEndDate(Builder $query, string $date): void
    {
        $query->where('created_at', '<=', $date);
    }
}
