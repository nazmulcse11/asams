<?php

namespace App\Services;

use App\Repositories\Contracts\SaleRequestRepositoryInterface;
use App\Services\Contracts\SaleRequestServiceInterface;
use App\Models\SaleRequest;
use App\Services\Traits\BaseServiceTrait;
use App\Utils\ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Support\Collection;

class SaleRequestService implements SaleRequestServiceInterface
{
    use BaseServiceTrait;

    protected SaleRequestRepositoryInterface $repository;

    public function __construct(SaleRequestRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAllSaleRequests(): LengthAwarePaginator|DatabaseCollection|Collection
    {
        return ExceptionHandler::handle(function () {
            return $this->repository->all();
        });
    }

    public function getSaleRequestById(mixed $id): ?SaleRequest
    {
        return ExceptionHandler::handle(function () use ($id) {
            return $this->repository->findById($id);
        });
    }

    public function storeSaleRequest(array $data): ?SaleRequest
    {
        return ExceptionHandler::handle(function () use ($data) {
            return $this->repository->create($data);
        });
    }

    public function deleteSaleRequest(SaleRequest $saleRequest): bool
    {
        return ExceptionHandler::handle(function () use ($saleRequest) {
            return $this->repository->delete($saleRequest);
        });
    }
}
