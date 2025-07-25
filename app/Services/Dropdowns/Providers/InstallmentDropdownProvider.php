<?php

namespace App\Services\Dropdowns\Providers;

use App\Repositories\Contracts\InstallmentRepositoryInterface;
use App\Services\Dropdowns\Contracts\DropdownProviderInterface;

class InstallmentDropdownProvider implements DropdownProviderInterface
{
    protected InstallmentRepositoryInterface $repository;

    public function __construct(InstallmentRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getOptions(array $filters = []): array
    {
        return $this
            ->repository
            ->all(["*"], $filters, ["paymentType:id,name"])
            ->toArray();
    }
}
