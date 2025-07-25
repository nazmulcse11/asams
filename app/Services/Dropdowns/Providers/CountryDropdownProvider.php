<?php

namespace App\Services\Dropdowns\Providers;

use App\Repositories\Contracts\CountryRepositoryInterface;
use App\Services\Dropdowns\Contracts\DropdownProviderInterface;

class CountryDropdownProvider implements DropdownProviderInterface
{
    protected CountryRepositoryInterface $repository;

    public function __construct(CountryRepositoryInterface $repository)
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
