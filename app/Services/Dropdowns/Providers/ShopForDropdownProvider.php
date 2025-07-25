<?php

namespace App\Services\Dropdowns\Providers;

use App\Repositories\Contracts\ShopForRepositoryInterface;
use App\Services\Dropdowns\Contracts\DropdownProviderInterface;

class ShopForDropdownProvider implements DropdownProviderInterface
{
    protected ShopForRepositoryInterface $repository;

    public function __construct(ShopForRepositoryInterface $repository)
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