<?php

namespace App\Services;

use App\Repositories\Contracts\BlockRepositoryInterface;
use App\Services\Contracts\BlockServiceInterface;
use App\Models\Block;
use App\Services\Traits\BaseServiceTrait;
use App\Utils\ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Support\Collection;

class BlockService implements BlockServiceInterface
{
    use BaseServiceTrait;

    protected BlockRepositoryInterface $repository;

    public function __construct(BlockRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    // Implement service methods
    public function getAllBlocks(array $filters = []): LengthAwarePaginator|DatabaseCollection|Collection
    {
        return ExceptionHandler::handle(function () use ($filters) {
            return $this->repository->all(["*"], $filters, ["shops"], "name", "asc");
        });
    }

    public function getBlockById(mixed $id): ?Block
    {
        return ExceptionHandler::handle(function () use ($id) {
            return $this->repository->findById($id, ['floor', "floor.property", "shops"]);
        });
    }

    public function storeBlock(array $data): ?Block
    {
        return ExceptionHandler::handle(function () use ($data) {
            $item = $this->repository->create($data);
            return $this->getBlockById($item->id);
        });
    }

    public function updateBlock(Block $block, array $data): Block
    {
        return ExceptionHandler::handle(function () use ($block, $data) {
            $item = $this->repository->update($block->id, $data);
            return $this->getBlockById($item->id);
        });
    }

    public function deleteBlock(Block $block): bool
    {
        return ExceptionHandler::handle(function () use ($block) {
            return $this->repository->delete($block->id);
        });
    }

    public function deleteBulkBlocks(array $ids): bool
    {
        return ExceptionHandler::handle(function() use ($ids) {
            return $this->repository->deleteBulk($ids);
        });
    }
}
