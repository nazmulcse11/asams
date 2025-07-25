<?php

namespace App\Services;

use App\Models\Agent;
use App\Repositories\Contracts\AdministratorRepositoryInterface;
use App\Repositories\Contracts\AgentRepositoryInterface;
use App\Repositories\Contracts\ShopRepositoryInterface;
use App\Services\Contracts\AgentServiceInterface;
use App\Services\Contracts\ShopServiceInterface;
use App\Utils\ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AgentService implements Contracts\AgentServiceInterface
{

    public function __construct(
        protected AgentRepositoryInterface $repository,
        protected MediaService $mediaService,
        protected ShopRepositoryInterface $shopRepository
    )
    {
    }

    public function getAllAgents(): LengthAwarePaginator|\Illuminate\Database\Eloquent\Collection
    {
        return ExceptionHandler::handle(function (){
            return $this->repository->all(["*"], [], ["addresses", "profile"]);
        });
    }

    public function getDataTable(Request $request): array
    {
        return ExceptionHandler::handle(function() use ($request) {
            $draw = $request->input('draw');

            $agents = $this->repository->getDataTableData($request);

            $this->columns($agents);

            return [
                "draw" => intval($draw),                   // Draw parameter for DataTables sequence validation
                "recordsTotal" => $this->repository->count(),        // Total records in the database (without filters)
                "recordsFiltered" => $agents->total(),  // Total records after filtering
                "data" => $agents->items(),             // Data array for the current page
            ];
        }, []);
    }

    protected function columns($companies): void
    {
        $companies->getCollection()->transform(function ($company) {
            $company->description = Str::limit($company->description, 50); // Limit description to 100 characters
            return $company;
        });
    }

    public function reserve(mixed $agent_id): int
    {
        return ExceptionHandler::handle(function () use ($agent_id) {
            return $this->repository
                ->getModel()
                ->with(["units", "units.shop"])
                ->join("agent_units", "agent_units.agent_id", "=", "agents.id")
                ->join("shops", "agent_units.shop_id", "=", "shops.id")
                ->whereNotNull("agent_units.approve_by")
                ->where("agent_id", $agent_id)
                ->count();

        });
    }

    public function sold(mixed $agent_id): int
    {
        return ExceptionHandler::handle(function () use ($agent_id) {
            return $this->repository
                ->getModel()
                ->with(["units", "units.shop"])
                ->join("agent_units", "agent_units.agent_id", "=", "agents.id")
                ->join("shops", "agent_units.shop_id", "=", "shops.id")
                ->whereNotNull("agent_units.approve_by")
                ->where("shops.status_id", 51)
                ->where("agent_id", $agent_id)
                ->count();
        });
    }

    public function revenue(mixed $agent_id)
    {
        return ExceptionHandler::handle(function () use ($agent_id) {

            return DB::table('buyer_shops')
                ->where('agent_id', $agent_id)
                ->sum('sell_amount');
        });
    }

    public function commission(mixed $agent_id)
    {
        return ExceptionHandler::handle(function () use ($agent_id) {
            $commission = DB::table('agent_units')
                ->join('buyer_shops', function ($join) {
                    $join->on('agent_units.agent_id', '=', 'buyer_shops.agent_id')
                        ->on('agent_units.shop_id', '=', 'buyer_shops.shop_id');
                })
                ->where('agent_units.agent_id', $agent_id)
                ->whereNotNull('agent_units.approve_by') // Optional: only approved units
                ->select(DB::raw('SUM(buyer_shops.sell_amount * (agent_units.commission / 100)) as total_commission'))
                ->value('total_commission');

            return number_format($commission, 2);
        });
    }

    public function getAgentById(mixed $id): ?Agent
    {
        return ExceptionHandler::handle(function () use ($id) {
            return $this->repository->findById($id);
        });
    }

    public function storeAgent(array $data): ?Agent
    {
        return ExceptionHandler::handle(function () use ($data) {
            $item = $this->repository->create($data);

            $item->propertyLinks()->create([
                'property_id' => getCurrentProperty()?->id
            ]);

            $item->profile()->create($data);

            $item->addresses()->create($data);

            if (isset($data['picture'])) {
                $this->mediaService->uploadMedia($item->profile, $data['picture'], "picture");
            }

            if (isset($data['cover'])) {
                $this->mediaService->uploadMedia($item->profile, $data['cover'], "cover");
            }

            if (isset($data['nid_copy'])) {
                $this->mediaService->uploadMedia($item->profile, $data['nid_copy'], "nid_copy");
            }

            return $item;
        }, null, true);
    }

    public function updateAgent(Agent $agent, array $data): Agent
    {
        return ExceptionHandler::handle(function () use ($agent, $data) {
            $agent =  $this->repository->update($agent, $data);

            if (isset($data['picture'])) {
                $this->mediaService->updateMedia($agent->profile, $data['picture'], "picture");
            }

            return $agent;
        }, $agent, true);
    }

    public function deleteAgent(Agent $agent): bool
    {
        return ExceptionHandler::handle(function () use ($agent) {
            if( $agent->profile?->picture ) {
                $this->mediaService->deleteMedia($agent->profile, 'picture');
            }
            return $this->repository->delete($agent);
        }, false, true);
    }

    public function deleteBulkAgents(array $ids): bool
    {
        return ExceptionHandler::handle(function() use ($ids) {
            return $this->repository->deleteBulk($ids);
        }, false, true);
    }
}
