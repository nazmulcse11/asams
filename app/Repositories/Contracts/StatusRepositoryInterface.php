<?php

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;

interface StatusRepositoryInterface
{
    public function all(): Collection;
    public function findById(mixed $id): ?object;
}
