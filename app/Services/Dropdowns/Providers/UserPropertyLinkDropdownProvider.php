<?php

namespace App\Services\Dropdowns\Providers;

use App\Repositories\Contracts\UserPropertyLinkRepositoryInterface;
use App\Services\Dropdowns\Contracts\DropdownProviderInterface;

class UserPropertyLinkDropdownProvider implements DropdownProviderInterface
{
    protected UserPropertyLinkRepositoryInterface $repository;

    public function __construct(UserPropertyLinkRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getOptions(array $filters = []): array
    {
        return $this
            ->repository
            ->all(["*"], $filters)
            ->map(fn($item) => ['id' => $item->property_id, 'name' => $item->property->name])
            ->toArray();
    }
}
