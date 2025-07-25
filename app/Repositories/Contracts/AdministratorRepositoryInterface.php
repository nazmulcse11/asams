<?php

namespace App\Repositories\Contracts;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

interface AdministratorRepositoryInterface
{

    public function getDataTableData(Request $request): LengthAwarePaginator;

    public function withRelationships(array $relationships): LengthAwarePaginator;

    public function findById(int $id): ?User;

    public function create(array $attributes): User;

    public function update(User $administrator, array $attributes): ?User;

    public function delete(User $administrator): bool;

}
