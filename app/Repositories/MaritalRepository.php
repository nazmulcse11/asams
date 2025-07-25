<?php

namespace App\Repositories;

use App\Repositories\Contracts\MaritalRepositoryInterface;
use App\Repositories\Traits\CacheableRepositoryTrait;
use Illuminate\Support\Facades\DB;

class MaritalRepository implements MaritalRepositoryInterface
{
    use CacheableRepositoryTrait;

    public function all(): \Illuminate\Support\Collection
    {
        return DB::table("maritals")
            ->select(['id', 'name'])
            ->latest()
            ->get();
    }

    public function findById(mixed $id): ?object
    {
        return DB::table("maritals")
            ->select(['id', 'name'])
            ->whereId($id)
            ->first();

    }
}
