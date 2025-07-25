<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Http\Requests\Agent\AgentShop\StoreAgentShopRequest;
use App\Models\Property;
use App\Repositories\Contracts\AgentShopRepositoryInterface;
use App\Services\Contracts\AgentShopServiceInterface;
use App\Services\Contracts\PropertyServiceInterface;
use Illuminate\Http\Request;

class ShopReservationController extends Controller
{

    public function __construct(
        protected AgentShopServiceInterface $service,
        protected PropertyServiceInterface $propertyService
    )
    {
    }

    public function index()
    {
        return view('agent.reserved-shop.index');
    }

    public function market(Request $request)
    {
        $property = $this->propertyService->getPropertyById($request->property);

        return redirect()->route('agent.reserved-shop.floor-plan', [
            'property' => $property
        ]);
    }

    public function floorPlan(Property $property)
    {
        return view('agent.reserved-shop.floor-plan', [
            'item' => $property
        ]);
    }

    public function reserve(StoreAgentShopRequest $request)
    {
        $item = $this->service->storeAgentShop(array_merge($request->all(), [
            "agent_id" => auth("agent")->user()->id,
            "status_id" => getStatusId('Agent Shop', 'Pending')
        ]));

        if (!$item) {
            return response()->json([
                'success' => false
            ]);
        }

        return response()->json([
            'success' => true,
        ]);
    }
}
