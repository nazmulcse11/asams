<?php

namespace App\Services\Contracts;

use App\Models\AgentShop;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Support\Collection;

interface AgentShopServiceInterface
{
    public function getAllAgentShops(): LengthAwarePaginator|DatabaseCollection|Collection;

    public function getDataTable(Request $request): array;

    public function getAgentShopById(mixed $id): ?AgentShop;

    public function storeAgentShop(array $data): ?AgentShop;

    public function updateAgentShop(AgentShop $agentShop, array $data): AgentShop;

    public function deleteAgentShop(AgentShop $agentShop): bool;

    public function deleteBulkAgentShops(array $ids): bool;
}