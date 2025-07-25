<?php

namespace App\Services\Dropdowns\Providers;

use App\Repositories\Contracts\AgentUnitRepositoryInterface;
use App\Services\Dropdowns\Contracts\DropdownProviderInterface;

class AgentUnitDropdownProvider implements DropdownProviderInterface
{
    protected AgentUnitRepositoryInterface $repository;

    public function __construct(AgentUnitRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getOptions(array $filters = []): array
    {
        return $this
            ->repository
            ->all(["id", "agent_id", "shop_id"], $filters, ["agent:id,username", "shop:id,number"])
            ->map(fn($item) => ['id' => $item->id, 'name' => $item->agent->username . " -> Shop: " . $item->shop->number])
            ->toArray();
    }
}
