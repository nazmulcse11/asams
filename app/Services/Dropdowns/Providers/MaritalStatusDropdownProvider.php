<?php

namespace App\Services\Dropdowns\Providers;


use App\Repositories\Contracts\MaritalRepositoryInterface;
use App\Services\Dropdowns\Contracts\DropdownProviderInterface;

class MaritalStatusDropdownProvider implements DropdownProviderInterface
{
    protected MaritalRepositoryInterface $maritalRepository;

    public function __construct(MaritalRepositoryInterface $maritalRepository)
    {
        $this->maritalRepository = $maritalRepository;
    }

    public function getOptions(array $filters = []): array
    {
        return $this
            ->maritalRepository
            ->all()
            ->map(fn($item) => ['id' => $item->id, 'name' => $item->name])
            ->toArray();
    }
}
