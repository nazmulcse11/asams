<?php

namespace App\Services\Dropdowns\Providers;

use App\Repositories\Contracts\FloorRepositoryInterface;
use App\Services\Dropdowns\Contracts\DropdownProviderInterface;

class FloorDropdownProvider implements DropdownProviderInterface
{

    protected FloorRepositoryInterface $repository;

    public function __construct(FloorRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getOptions(array $filters = []): array
    {
        return $this
            ->repository
            ->findByCriteria(["id", "number"], $filters)
            ->map(fn($item) => ['id' => $item->id, 'name' => "floor " . $item->number])
            ->toArray();
    }
}
