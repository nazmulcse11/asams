<?php

namespace App\Filters;

use App\Filters\BaseFilter;
use Illuminate\Database\Eloquent\Builder;

class AgentFilter extends BaseFilter
{
    protected array $filterableFields = [
        'search.value' => 'filterByGlobalSearch',
        'usernameFilter' => 'filterByUserName',
        'emailFilter' => 'filterByEmail',
        'phoneFilter' => 'filterByPhone',
        'statusFilter' => 'filterByStatus',
        'startDateFilter' => 'filterByStartDate',
        'endDateFilter' => 'filterByEndDate',
    ];

    protected function filterByGlobalSearch(Builder $query, string $value): void
    {
        $query->where(function ($q) use ($value) {
            $q->where('username', 'like', "%{$value}%")
                ->orWhere('email', 'like', "%{$value}%")
                ->orWhere('phone', 'like', "%{$value}%");
        });
    }

    protected function filterByUserName(Builder $query, string $value): void
    {
        $query->where('username', 'like', "%{$value}%");
    }

    protected function filterByEmail(Builder $query, string $value): void
    {
        $query->where('email', 'like', "%{$value}%");
    }

    protected function filterByPhone(Builder $query, string $value): void
    {
        $query->where('phone', 'like', "%{$value}%");
    }

    protected function filterByStatus(Builder $query, string $value): void
    {
        $query->where('status_id', '=', $value);
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
