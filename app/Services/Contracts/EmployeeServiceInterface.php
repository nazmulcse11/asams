<?php

namespace App\Services\Contracts;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

interface EmployeeServiceInterface
{
    public function getAllEmployees(): LengthAwarePaginator;

    public function getDataTable(Request $request): array;

    public function getEmployeeById(mixed $id): ?object;

    public function storeEmployee(array $data): ?object;

    public function updateEmployee(Employee $Employee, array $data): object;

    public function deleteEmployee(Employee $Employee): bool;

    public function deleteBulkEmployees(array $ids): bool;
}
