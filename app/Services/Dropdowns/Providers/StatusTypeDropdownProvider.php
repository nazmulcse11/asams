<?php

namespace App\Services\Dropdowns\Providers;

use App\Repositories\Contracts\StatusTypeRepositoryInterface;
use App\Services\Dropdowns\Contracts\DropdownProviderInterface;

class StatusTypeDropdownProvider implements DropdownProviderInterface
{
    protected StatusTypeRepositoryInterface $statusTypeRepository;

    public function __construct(StatusTypeRepositoryInterface $statusTypeRepository)
    {
        $this->statusTypeRepository = $statusTypeRepository;
    }

    public function getOptions(array $filters = []): array
    {
        return $this
            ->statusTypeRepository
            ->all()
            ->toArray();
    }
}
