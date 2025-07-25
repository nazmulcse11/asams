<?php

namespace App\Services;

use App\Repositories\Contracts\InstallmentRepositoryInterface;
use App\Services\ActivityLog\Contracts\ActivityLogServiceInterface;
use App\Services\Contracts\InstallmentServiceInterface;
use App\Models\Installment;
use App\Services\Traits\BaseServiceTrait;
use App\Utils\ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Support\Collection;

class InstallmentService implements InstallmentServiceInterface
{
    use BaseServiceTrait;

    protected InstallmentRepositoryInterface $repository;
    protected ActivityLogServiceInterface $logger;

    public function __construct(InstallmentRepositoryInterface $repository, ActivityLogServiceInterface $logger)
    {
        $this->repository = $repository;
        $this->logger = $logger;
    }

    public function getDataTable(Request $request, mixed $agentUnit): array
    {
        return ExceptionHandler::handle(function() use ($request, $agentUnit) {
            $draw = $request->input('draw');

            $items = $this->repository->getDataTableData($request, $agentUnit->id);

            return [
                "draw" => intval($draw),                   // Draw parameter for DataTables sequence validation
                "recordsTotal" => $this->repository->count(["agent_unit_id" => $agentUnit->id]),        // Total records in the database (without filters)
                "recordsFiltered" => $items->total(),  // Total records after filtering
                "data" => $items->items(),             // Data array for the current page
            ];
        }, []);
    }

    public function getAllInstallments(): LengthAwarePaginator|DatabaseCollection|Collection
    {
        return ExceptionHandler::handle(function () {
            $this->logger->log("Get All Installments", [], "installments");
            return $this->repository->all();
        });
    }

    public function getInstallmentById(mixed $id): ?Installment
    {
        return ExceptionHandler::handle(function () use ($id) {
            $this->logger->log("Get Installment By Id", ["id" => $id], "installments");
            return $this->repository->findById($id);
        });
    }

    public function storeInstallment(array $data, mixed $agentUnit): bool
    {
        return ExceptionHandler::handle(function () use ($data, $agentUnit) {
            $this->logger->log("Create Installment", $data, "installments");
            $data = array_merge($data, [
                'agent_unit_id' => $agentUnit->id,
                "shop_id" => $agentUnit->shop_id
            ]);
            return $this->repository->create($data);
        });
    }
}
