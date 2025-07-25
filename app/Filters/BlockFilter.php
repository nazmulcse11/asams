<?php

namespace App\Filters;

use App\Filters\BaseFilter;
use Illuminate\Database\Eloquent\Builder;

class BlockFilter extends BaseFilter
{
    protected array $filterableFields = [
        'search.value' => 'filterByGlobalSearch',
        'nameFilter' => 'filterByName',
        'floorFilter' => 'filterByFloor',
        'startDateFilter' => 'filterByStartDate',
        'endDateFilter' => 'filterByEndDate',
    ];

    protected function filterByGlobalSearch(Builder $query, string $value): void
    {
        $query->where(function ($q) use ($value) {
            $q->where('name', 'like', "%{$value}%")
                ->orWhere('description', 'like', "%{$value}%");
        });
    }

    protected function filterByName(Builder $query, string $value): void
    {
        $query->where('name', 'like', "%{$value}%");
    }

    protected function filterByFloor(Builder $query, string $value): void
    {
        $query->where('floor_id', $value);
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
