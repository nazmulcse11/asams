<?php

namespace App\Services\Dropdowns\Providers;

use App\Repositories\Contracts\PaymentTypeRepositoryInterface;
use App\Services\Dropdowns\Contracts\DropdownProviderInterface;

class PaymentTypeDropdownProvider implements DropdownProviderInterface
{
    protected PaymentTypeRepositoryInterface $repository;

    public function __construct(PaymentTypeRepositoryInterface $repository)
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