<?php

namespace App\Services\Dropdowns\Providers;

use App\Repositories\Contracts\PropertyTypeRepositoryInterface;
use App\Services\Dropdowns\Contracts\DropdownProviderInterface;

class PropertyTypeDropdownProvider implements DropdownProviderInterface
{
    protected PropertyTypeRepositoryInterface $repository;

    public function __construct(PropertyTypeRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getOptions(array $filters = []): array
    {
        return $this
            ->repository
            ->all()
            ->map(fn($item) => ['id' => $item->id, 'name' => $item->name])
            ->toArray();
    }
}