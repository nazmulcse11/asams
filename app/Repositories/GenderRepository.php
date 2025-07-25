<?php

namespace App\Repositories;

use App\Repositories\Contracts\GenderRepositoryInterface;
use App\Repositories\Traits\CacheableRepositoryTrait;
use Illuminate\Support\Facades\DB;

class GenderRepository implements GenderRepositoryInterface
{
    use CacheableRepositoryTrait;

    public function all(): \Illuminate\Support\Collection
    {
        return DB::table("genders")
            ->select(['id', 'name'])
            ->latest()
            ->get();
    }

    public function findById(mixed $id): ?object
    {
        return DB::table("genders")
            ->select(['id', 'name'])
            ->whereId($id)
            ->first();
    }
}
