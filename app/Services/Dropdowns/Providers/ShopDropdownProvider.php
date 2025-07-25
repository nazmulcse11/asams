<?php

namespace App\Services\Dropdowns\Providers;

use App\Repositories\Contracts\ShopRepositoryInterface;
use App\Services\Dropdowns\Contracts\DropdownProviderInterface;

class ShopDropdownProvider implements DropdownProviderInterface
{
    protected ShopRepositoryInterface $repository;

    public function __construct(ShopRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getOptions(array $filters = []): array
    {
        return $this
            ->repository
            ->dropdown(['id', 'number'], $filters)
            ->map(fn($item) => ['id' => $item->id, 'name' => "Shop: " . $item->number])
            ->toArray();
    }
}
