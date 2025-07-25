<?php

namespace App\Filters;

use App\Filters\BaseFilter;
use Illuminate\Database\Eloquent\Builder;

class PropertyFilter extends BaseFilter
{
    protected array $filterableFields = [
        'search.value' => 'filterByGlobalSearch',
        'nameFilter' => 'filterByName',
        'typeFilter' => 'filterByType',
        'startDateFilter' => 'filterByStartDate',
        'endDateFilter' => 'filterByEndDate',
    ];

    protected function filterByGlobalSearch(Builder $query, string $value): void
    {
        $query->where(function ($q) use ($value) {
            $q->where('name', 'like', "%{$value}%")
                ->orWhere('contact_person', 'like', "%{$value}%")
                ->orWhere('contact_number', 'like', "%{$value}%");
        });
    }

    protected function filterByName(Builder $query, string $value): void
    {
        $query->where('name', 'like', "%{$value}%");
    }

    protected function filterByType(Builder $query, string $value): void
    {
        $query->where('property_type_id', '=', $value);
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
