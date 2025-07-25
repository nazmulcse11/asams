<?php

namespace App\Filters;

use App\Filters\BaseFilter;
use Illuminate\Database\Eloquent\Builder;

class PropertyBuyerShopFilter extends BaseFilter
{
    protected array $filterableFields = [
        'search.value' => 'filterByGlobalSearch',
        'propertyFilter' => 'filterByProperty',
    ];

    protected function filterByGlobalSearch(Builder $query, string $value): void
    {
        $query->where(function ($q) use ($value) {
            $q->where('number', $value) // shop number
            ->orWhereHas('block.floor.property', function ($q2) use ($value) {
                $q2->where('name', 'LIKE', "%{$value}%"); // property name
            })
                ->orWhereHas('buyer', function ($q3) use ($value) {
                    $q3->where('username', 'LIKE', "%{$value}%") // buyer name
                    ->orWhere('phone', 'LIKE', "%{$value}%"); // buyer phone
                });
        });
    }

    protected function filterByProperty(Builder $query, string $value): void
    {
        $query->whereHas('block.floor.property', function ($q) use ($value) {
            $q->where('id', $value);
        });
    }
}
