<?php

namespace App\Services\Contracts;

use App\Models\Installment;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Support\Collection;

interface InstallmentServiceInterface
{
    public function getAllInstallments(): LengthAwarePaginator|DatabaseCollection|Collection;

    public function getDataTable(Request $request, mixed $agentUnit): array;

    public function getInstallmentById(mixed $id): ?Installment;

    public function storeInstallment(array $data, mixed $agentUnit): bool;
}
