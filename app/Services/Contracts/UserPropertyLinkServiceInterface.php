<?php

namespace App\Services\Contracts;

use App\Models\UserPropertyLink;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Support\Collection;

interface UserPropertyLinkServiceInterface
{
    public function getAllUserPropertyLinks(): LengthAwarePaginator|DatabaseCollection|Collection;

    public function getDataTable(Request $request): array;

    public function getUserPropertyLinkById(mixed $id): ?UserPropertyLink;

    public function storeUserPropertyLink(array $data): ?UserPropertyLink;

    public function updateUserPropertyLink(UserPropertyLink $userPropertyLink, array $data): UserPropertyLink;

    public function deleteUserPropertyLink(UserPropertyLink $userPropertyLink): bool;

    public function deleteBulkUserPropertyLinks(array $ids): bool;
}