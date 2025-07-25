<?php

namespace App\Filters;

use App\Filters\BaseFilter;
use Illuminate\Database\Eloquent\Builder;

class ShopFilter extends BaseFilter
{
    protected array $filterableFields = [
        's' => 'filterByGlobalSearch',
        'block_id' => 'filterByBlock',
        'floor_id' => 'filterByFloor',
        'status_id' => 'filterByStatus',
    ];

    protected function filterByGlobalSearch(Builder $query, string $value): void
    {
        $shopNumbers = collect(explode(',', $value))
            ->map(fn($s) => trim($s))
            ->filter();
        if ($shopNumbers->isNotEmpty()) {
            $query->whereIn('number', $shopNumbers);
        }
    }

    protected function filterByBlock(Builder $query, string $value): void
    {
        $query->where('block_id', $value);
    }

    protected function filterByStatus(Builder $query, string $value): void
    {
        $query->where('status_id', $value);
    }

    protected function filterByFloor(Builder $query, string $value): void
    {
        $query->where('floor_id', $value);
    }
}
