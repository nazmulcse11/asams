<?php

namespace App\Services\Dropdowns\Providers;

use App\Repositories\Contracts\AddressTypeRepositoryInterface;
use App\Services\Dropdowns\Contracts\DropdownProviderInterface;

class AddressTypeDropdownProvider implements DropdownProviderInterface
{

    protected AddressTypeRepositoryInterface $addressTypeRepository;

    public function __construct(AddressTypeRepositoryInterface $addressTypeRepository)
    {
        $this->addressTypeRepository = $addressTypeRepository;
    }

    public function getOptions(array $filters = []): array
    {
        return $this
            ->addressTypeRepository
            ->all()
            ->map(fn($item) => ['id' => $item->id, 'name' => $item->name])
            ->toArray();
    }
}
