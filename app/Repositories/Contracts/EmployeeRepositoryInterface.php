<?php

namespace App\Repositories\Contracts;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

interface EmployeeRepositoryInterface
{

    public function getDataTableData(Request $request): LengthAwarePaginator;

    public function withRelationships(array $relationships): LengthAwarePaginator;

    public function findById(int $id): ?Employee;

    public function create(array $attributes): ?Employee;

    public function update(Employee $employee, array $attributes): ?Employee;

    public function delete(Employee $employee): bool;

    public function deleteBulk(array $ids): bool;
}
