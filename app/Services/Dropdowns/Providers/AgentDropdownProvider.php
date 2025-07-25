<?php

namespace App\Services\Dropdowns\Providers;

use App\Repositories\AgentRepository;
use App\Services\Dropdowns\Contracts\DropdownProviderInterface;

class AgentDropdownProvider implements DropdownProviderInterface
{

    protected AgentRepository $agentRepository;

    public function __construct(AgentRepository $agentRepository)
    {
        $this->agentRepository = $agentRepository;
    }

    public function getOptions(array $filters = []): array
    {
        return $this
            ->agentRepository
            ->all()
            ->map(fn($item) => ['id' => $item->id, 'name' => $item->username])
            ->toArray();
    }
}
