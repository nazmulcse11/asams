<?php

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;

interface StatusTypeRepositoryInterface
{
    public function all(): Collection;
}
