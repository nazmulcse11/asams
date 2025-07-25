<?php

namespace App\Services;

use App\Repositories\Contracts\AgentUnitRepositoryInterface;
use App\Repositories\Contracts\FloorRepositoryInterface;
use App\Repositories\Contracts\ShopDepositRepositoryInterface;
use App\Services\ActivityLog\Contracts\ActivityLogServiceInterface;
use App\Services\Contracts\AgentUnitServiceInterface;
use App\Models\AgentUnit;
use App\Utils\ExceptionHandler;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class AgentUnitService implements AgentUnitServiceInterface
{
    protected AgentUnitRepositoryInterface $repository;
    protected ShopDepositRepositoryInterface $shopDepositRepository;
    protected FloorRepositoryInterface $floorRepository;
    protected ActivityLogServiceInterface $logger;

    public function __construct(AgentUnitRepositoryInterface $repository,
        ShopDepositRepositoryInterface $shopDepositRepository,
        FloorRepositoryInterface $floorRepository,
        ActivityLogServiceInterface $logger)
    {
        $this->shopDepositRepository = $shopDepositRepository;
        $this->repository = $repository;
        $this->floorRepository = $floorRepository;
        $this->logger = $logger;
    }

    // Implement service methods
    public function getAllAgentUnits(): Collection
    {
        return ExceptionHandler::handle(function () {
            $this->logger->log("getting all agent unit data.", [], "agent unit");
            return $this->repository->all();
        });
    }

    public function getDataTable(Request $request): array
    {
        return ExceptionHandler::handle(function() use ($request) {
            $draw = $request->input('draw');

            $agents = $this->repository->getDataTableData($request);

            return [
                "draw" => intval($draw),                   // Draw parameter for DataTables sequence validation
                "recordsTotal" => $this->repository->count(),        // Total records in the database (without filters)
                "recordsFiltered" => $agents->total(),  // Total records after filtering
                "data" => $agents->items(),             // Data array for the current page
            ];
        }, []);
    }

    public function getUnverifiedDataTable(Request $request): array
    {
        return ExceptionHandler::handle(function() use ($request) {
            $draw = $request->input('draw');

            $agents = $this->repository->getUnverifiedDataTableData($request);

            return [
                "draw" => intval($draw),                   // Draw parameter for DataTables sequence validation
                "recordsTotal" => $this->repository->count([
                    "shop_id" => $request->input("shop_id"),
                    "approve_by" => ['=', null]
                ]),        // Total records in the database (without filters)
                "recordsFiltered" => $agents->total(),  // Total records after filtering
                "data" => $agents->items(),             // Data array for the current page
            ];
        }, []);
    }

    public function approveAgentUnit(mixed $agentUnitId): bool
    {
        return ExceptionHandler::handle(function () use ($agentUnitId) {
            $this->logger->log("approve agent unit.", ["agent_unit_id" => $agentUnitId], "agent unit");
            return $this->repository->approve($agentUnitId);
        });
    }

    public function verifyAgentUnit(mixed $agentUnit, array $attributes): bool
    {
        return ExceptionHandler::handle(function () use ($agentUnit, $attributes) {
            $this->logger->log("verify agent unit.", ["agent_unit" => $agentUnit, "attributes" => $attributes], "agent unit");
            return $this->repository->verify($agentUnit, $attributes);
        }, false, true);
    }

    public function securityDeposit(AgentUnit $agentUnit, array $attributes): bool
    {
        return ExceptionHandler::handle(function () use ($agentUnit, $attributes) {
            $this->logger->log("security deposit.", ["agent_unit" => $agentUnit, "attributes" => $attributes], "agent unit");
            $this->repository->paidSecurityDeposit($agentUnit);
            $this->shopDepositRepository->create($agentUnit, $attributes);
            return true;
        }, false, true);
    }

    public function getVerifiedDataTable(Request $request): array
    {
        return ExceptionHandler::handle(function() use ($request) {
            $draw = $request->input('draw');

            $agents = $this->repository->getVerifiedDataTableData($request);

            return [
                "draw" => intval($draw),                   // Draw parameter for DataTables sequence validation
                "recordsTotal" => $this->repository->count([
                    "shop_id" => $request->input("shop_id"),
                    "approve_by" => ['!=', null]
                ]),        // Total records in the database (without filters)
                "recordsFiltered" => $agents->total(),  // Total records after filtering
                "data" => $agents->items(),             // Data array for the current page
            ];
        }, []);
    }

    public function getAgentUnitById(mixed $id): ?AgentUnit
    {
        return ExceptionHandler::handle(function () use ($id) {
            $this->logger->log("getting agent unit data.", ["agent_unit_id" => $id], "agent unit");
            return $this->repository->findById($id, ['agent', 'shop', 'shopDeposit']);
        });
    }

    public function storeAgentUnit(array $data): ?AgentUnit
    {
        return ExceptionHandler::handle(function () use ($data) {
            $this->logger->log("create agent unit.", $data, "agent unit");
            $agentUnit = '';
            for($i = 0; $i < count($data["ids"]); $i++) {
                $agentUnit = $this->repository->create([
                    "agent_id" => $data["agent"],
                    "shop_id" => $data["ids"][$i],
                    "booking_percent" => $data["percents"][$i],
                    "agree_booking_percent" => $data["percents"][$i],
                    "booking_amount" => $data["amounts"][$i],
                    "agree_booking_amount" => $data["amounts"][$i],
                    "offer_amount" => $data["offers"][$i],
                ]);
            }
            return $agentUnit;
        }, null, true);
    }

    public function updateAgentUnit(AgentUnit $agentUnit, array $data): AgentUnit
    {
        return ExceptionHandler::handle(function () use ($agentUnit, $data) {
            $this->logger->log("update agent unit.", ["agent_unit" => $agentUnit, "data" => $data], "agent unit");
            return $this->repository->update($agentUnit, $data);
        });
    }

    public function deleteAgentUnit(AgentUnit $agentUnit): bool
    {
        return ExceptionHandler::handle(function () use ($agentUnit) {
            $this->logger->log("delete agent unit.", ["agent_unit" => $agentUnit], "agent unit");
            return $this->repository->delete($agentUnit->id);
        });
    }

    public function deleteBulkAgentUnits(array $ids): bool
    {
        return ExceptionHandler::handle(function() use ($ids) {
            $this->logger->log("delete bulk agent units.", ["ids" => $ids], "agent unit");
            return $this->repository->deleteBulk($ids);
        });
    }

    public function getShopApprovedAgent($id)
    {
        return ExceptionHandler::handle(function() use ($id) {
            $this->logger->log("getting agent unit data.", ["agent_unit_id" => $id], "agent unit");

            $floor = $this->floorRepository->all(
                ["*"],
                ["id" => $id],
                [
                    'blocks:id,name,floor_id',
                    'blocks.shops',
                    'blocks.shops.agentUnit',
                ])->first();
            $shopsStatus = [];

            foreach ($floor->blocks as $block) {
                foreach ($block->shops as $shop) {
                    $approved = false;

                    foreach ($shop->agentUnit as $agentUnit) {
                        if (!is_null($agentUnit->approve_by)) {
                            $approved = true;
                            break;
                        }
                    }
                    $shopsStatus[$shop['id']] = $approved;
                }
            }

            return $shopsStatus;
        });
    }
}
