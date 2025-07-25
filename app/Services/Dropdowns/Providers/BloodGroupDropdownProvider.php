<?php

namespace App\Services\Dropdowns\Providers;

use App\Repositories\Contracts\BloodGroupRepositoryInterface;
use App\Services\Dropdowns\Contracts\DropdownProviderInterface;

class BloodGroupDropdownProvider implements DropdownProviderInterface
{

    protected BloodGroupRepositoryInterface $bloodGroupRepository;

    public function __construct(BloodGroupRepositoryInterface $bloodGroupRepository)
    {
        $this->bloodGroupRepository = $bloodGroupRepository;
    }

    public function getOptions(array $filters = []): array
    {
        return $this
            ->bloodGroupRepository
            ->all()
            ->map(fn($item) => ['id' => $item->id, 'name' => $item->name])
            ->toArray();
    }
}
