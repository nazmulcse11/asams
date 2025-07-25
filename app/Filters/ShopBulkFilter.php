<?php

namespace App\Filters;

use App\Filters\BaseFilter;
use Illuminate\Database\Eloquent\Builder;

class ShopBulkFilter extends BaseFilter
{
    protected array $filterableFields = [
        'block_id' => 'filterByBlock',
        'floor_id' => 'filterByFloor',
    ];

    protected function filterByBlock(Builder $query, string $value): void
    {
        $query->where('block_id', $value);
    }

    protected function filterByFloor(Builder $query, string $value): void
    {
        $query->whereHas('block', function ($q) use ($value) {
            $q->where('floor_id', $value);
        });

    }
}
