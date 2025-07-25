<?php

namespace App\Services\Contracts;

use App\Models\AgentUnit;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Support\Collection;

interface AgentUnitServiceInterface
{
    public function getAllAgentUnits(): LengthAwarePaginator|DatabaseCollection|Collection;

    public function getDataTable(Request $request): array;

    public function getAgentUnitById(mixed $id): ?AgentUnit;

    public function storeAgentUnit(array $data): ?AgentUnit;

    public function updateAgentUnit(AgentUnit $agentUnit, array $data): AgentUnit;

    public function deleteAgentUnit(AgentUnit $agentUnit): bool;

    public function deleteBulkAgentUnits(array $ids): bool;
}
