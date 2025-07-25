<?php

namespace App\Services\Contracts;

use App\Models\Agent;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

interface AgentServiceInterface
{
    public function getAllAgents(): LengthAwarePaginator|Collection;

    public function getDataTable(Request $request): array;

    public function getAgentById(mixed $id): ?Agent;

    public function storeAgent(array $data): ?Agent;

    public function updateAgent(Agent $agent, array $data): Agent;

    public function deleteAgent(Agent $agent): bool;

    public function deleteBulkAgents(array $ids): bool;
}
