<?php

namespace App\Services\Dropdowns\Providers;

use App\Repositories\Contracts\StateRepositoryInterface;
use App\Services\Dropdowns\Contracts\DropdownProviderInterface;

class StateDropdownProvider implements DropdownProviderInterface
{
    protected StateRepositoryInterface $repository;

    public function __construct(StateRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getOptions(array $filters = []): array
    {
        return $this
            ->repository
            ->all(["id", "name"], $filters)
            ->map(fn($item) => ['id' => $item->id, 'name' => $item->name])
            ->toArray();
    }
}
