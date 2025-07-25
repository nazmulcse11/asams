<?php

namespace App\Services\Dropdowns\Providers;

use App\Repositories\Contracts\BuyerTypeRepositoryInterface;
use App\Services\Dropdowns\Contracts\DropdownProviderInterface;

class BuyerTypeDropdownProvider implements DropdownProviderInterface
{
    protected BuyerTypeRepositoryInterface $repository;

    public function __construct(BuyerTypeRepositoryInterface $repository)
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