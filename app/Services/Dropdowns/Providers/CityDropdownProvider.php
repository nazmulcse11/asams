<?php

namespace App\Services\Dropdowns\Providers;

use App\Repositories\Contracts\CityRepositoryInterface;
use App\Services\Dropdowns\Contracts\DropdownProviderInterface;

class CityDropdownProvider implements DropdownProviderInterface
{
    protected CityRepositoryInterface $repository;

    public function __construct(CityRepositoryInterface $repository)
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
