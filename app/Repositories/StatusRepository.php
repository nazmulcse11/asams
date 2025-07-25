<?php

namespace App\Repositories;

use App\Repositories\Contracts\StatusRepositoryInterface;
use App\Repositories\Traits\CacheableRepositoryTrait;
use Illuminate\Support\Facades\DB;

class StatusRepository implements StatusRepositoryInterface
{
    use CacheableRepositoryTrait;

    public function all(array $filters = []): \Illuminate\Support\Collection
    {
        return DB::table("statuses")
            ->join("status_types", "statuses.type_id", "=", "status_types.id")
            ->select(['statuses.id', 'statuses.name'])
            ->where("status_types.name", $filters['type'])
            ->latest("statuses.created_at")
            ->get();
    }

    public function findById(mixed $id): ?object
    {
        return DB::table("statuses")
            ->select(['id', 'name'])
            ->whereId($id)
            ->first();
    }
}
