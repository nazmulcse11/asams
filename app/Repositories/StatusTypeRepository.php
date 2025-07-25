<?php

namespace App\Repositories;

use App\Repositories\Contracts\StatusTypeRepositoryInterface;
use App\Repositories\Traits\CacheableRepositoryTrait;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class StatusTypeRepository implements StatusTypeRepositoryInterface
{
    use CacheableRepositoryTrait;

    public function all(): Collection
    {
        return DB::table("status_types")
            ->pluck('name');
    }
}
