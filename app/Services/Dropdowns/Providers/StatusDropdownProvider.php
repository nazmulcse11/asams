<?php

namespace App\Services\Dropdowns\Providers;


use App\Repositories\Contracts\StatusRepositoryInterface;
use App\Services\Dropdowns\Contracts\DropdownProviderInterface;

class StatusDropdownProvider implements DropdownProviderInterface
{
    protected StatusRepositoryInterface $statusRepository;

    public function __construct(StatusRepositoryInterface $statusRepository)
    {
        $this->statusRepository = $statusRepository;
    }

    public function getOptions(array $filters = []): array
    {
        return $this
            ->statusRepository
            ->all($filters)
            ->map(fn($item) => ['id' => $item->id, 'name' => $item->name])
            ->toArray();
    }
}
