<?php

namespace App\Services\Contracts;

use App\Models\AgentPayment;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Support\Collection;

interface AgentPaymentServiceInterface
{
    public function getAllAgentPayments(): LengthAwarePaginator|DatabaseCollection|Collection;

    public function getDataTable(Request $request): array;

    public function getAgentPaymentById(mixed $id): ?AgentPayment;

    public function storeAgentPayment(Request $request): ?AgentPayment;

    public function updateAgentPayment(AgentPayment $agentPayment, array $data): AgentPayment;

    public function deleteAgentPayment(AgentPayment $agentPayment): bool;

    public function deleteBulkAgentPayments(array $ids): bool;
}
