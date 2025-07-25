<?php

namespace App\Repositories;

use App\Repositories\Contracts\AddressTypeRepositoryInterface;
use App\Repositories\Traits\CacheableRepositoryTrait;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class AddressTypeRepository implements Contracts\AddressTypeRepositoryInterface
{

    use CacheableRepositoryTrait;

    public function all(): Collection
    {
        return DB::table("address_types")
            ->select(['id', 'name'])
            ->latest()
            ->get();
    }

    public function findById(mixed $id): ?object
    {
        return DB::table("address_types")
            ->select(['id', 'name'])
            ->whereId($id)
            ->first();
    }
}
