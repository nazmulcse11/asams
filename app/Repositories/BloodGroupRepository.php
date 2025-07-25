<?php

namespace App\Repositories;

use App\Repositories\Contracts\BloodGroupRepositoryInterface;
use App\Repositories\Traits\CacheableRepositoryTrait;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class BloodGroupRepository implements BloodGroupRepositoryInterface
{
    use CacheableRepositoryTrait;

    public function all(): Collection
    {
        return DB::table("blood_groups")
            ->select(['id', 'name'])
            ->latest()
            ->get();
    }

    public function findById(mixed $id): ?object
    {
        return DB::table("blood_groups")
            ->select(['id', 'name'])
            ->whereId($id)
            ->first();
    }
}
