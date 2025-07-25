<?php

namespace App\Services\Dropdowns\Providers;

use App\Repositories\Contracts\PaymentModeRepositoryInterface;
use App\Services\Dropdowns\Contracts\DropdownProviderInterface;

class PaymentModeDropdownProvider implements DropdownProviderInterface
{
    protected PaymentModeRepositoryInterface $repository;

    public function __construct(PaymentModeRepositoryInterface $repository)
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