<?php

namespace App\Services\Contracts;

use App\Models\Block;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Support\Collection;

interface BlockServiceInterface
{
    public function getAllBlocks(): LengthAwarePaginator|DatabaseCollection|Collection;

    public function getDataTable(Request $request): array;

    public function getBlockById(mixed $id): ?Block;

    public function storeBlock(array $data): ?Block;

    public function updateBlock(Block $block, array $data): Block;

    public function deleteBlock(Block $block): bool;

    public function deleteBulkBlocks(array $ids): bool;
}