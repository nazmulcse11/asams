<?php

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;

interface GenderRepositoryInterface
{
    public function all(): Collection;
    public function findById(mixed $id): ?object;
}
