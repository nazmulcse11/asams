<?php

namespace App\Filters;

use App\Filters\FilterInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class BaseFilter implements FilterInterface
{

    /**
     * Base filter class
     *
     * @package App\Filters
     */
    protected array $filterableFields = [];

    /**
     * @param Builder $query
     * @param Request $request
     * @return Builder
     */
    public function apply(Builder $query, Request $request): Builder
    {
        foreach ($this->filterableFields as $field => $method) {
            if ($request->filled($field)) {
                $this->$method($query, $request->input($field));
            }
        }
        return $query;
    }
}
