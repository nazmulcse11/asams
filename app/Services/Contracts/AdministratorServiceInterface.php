<?php

namespace App\Services\Contracts;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

interface AdministratorServiceInterface
{
    public function getAllAdministrators(): LengthAwarePaginator;

    public function getDataTable(Request $request): array;

    public function getAdministratorById(mixed $id): ?User;

    public function storeAdministrator(array $data): ?User;

    public function updateAdministrator(User $administrator, array $data): User;

    public function deleteAdministrator(User $administrator): bool;

    public function deleteBulkAdministrators(array $ids): bool;
}
