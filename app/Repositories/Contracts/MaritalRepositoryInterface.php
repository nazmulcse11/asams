<?php

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;

interface MaritalRepositoryInterface
{
    public function all(): Collection;
    public function findById(mixed $id): ?object;
}
