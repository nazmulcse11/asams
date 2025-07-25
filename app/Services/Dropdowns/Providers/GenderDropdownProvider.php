<?php

namespace App\Services\Dropdowns\Providers;


use App\Repositories\Contracts\GenderRepositoryInterface;
use App\Services\Dropdowns\Contracts\DropdownProviderInterface;

class GenderDropdownProvider implements DropdownProviderInterface
{
    protected GenderRepositoryInterface $genderRepository;

    public function __construct(GenderRepositoryInterface $genderRepository)
    {
        $this->genderRepository = $genderRepository;
    }

    public function getOptions(array $filters = []): array
    {
        return $this
            ->genderRepository
            ->all()
            ->map(fn($item) => ['id' => $item->id, 'name' => $item->name])
            ->toArray();
    }
}
