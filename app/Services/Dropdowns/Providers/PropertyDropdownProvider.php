<?php

namespace App\Services\Dropdowns\Providers;

use App\Repositories\Contracts\PropertyRepositoryInterface;
use App\Services\Dropdowns\Contracts\DropdownProviderInterface;

class PropertyDropdownProvider implements DropdownProviderInterface
{

    protected PropertyRepositoryInterface $repository;

    public function __construct(PropertyRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getOptions(array $filters = []): array
    {
        return $this
            ->repository
            ->dropdown(['id', 'name'], $filters)
            ->map(fn($item) => ['id' => $item->id, 'name' => $item->name])
            ->toArray();
    }
}
