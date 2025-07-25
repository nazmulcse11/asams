<?php

namespace App\Services\Dropdowns\Providers;

use App\Repositories\Contracts\BlockRepositoryInterface;
use App\Services\Dropdowns\Contracts\DropdownProviderInterface;

class BlockDropdownProvider implements DropdownProviderInterface
{

    protected BlockRepositoryInterface $repository;

    public function __construct(BlockRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getOptions(array $filters = []): array
    {
        if (!isset($filters['floor_id'])) {
            return [];
        }

        return $this
            ->repository
            ->dropdown($filters['floor_id'])
            ->map(fn($item) => ['id' => $item->id, 'name' => "block " . $item->name])
            ->toArray();
    }
}
