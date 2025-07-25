<?php

namespace App\Services\Dropdowns\Providers;

use App\Repositories\Contracts\BuyerRepositoryInterface;
use App\Services\Dropdowns\Contracts\DropdownProviderInterface;

class BuyerDropdownProvider implements DropdownProviderInterface
{
    protected BuyerRepositoryInterface $repository;

    public function __construct(BuyerRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getOptions(array $filters = []): array
    {
        return $this
            ->repository
            ->all(["id", "username"], $filters)
            ->map(fn($item) => ['id' => $item->id, 'name' => $item->username])
            ->toArray();
    }
}
