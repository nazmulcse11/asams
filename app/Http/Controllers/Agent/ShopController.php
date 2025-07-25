<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use App\Services\Contracts\FloorServiceInterface;
use App\Services\Contracts\PropertyServiceInterface;
use App\Services\Contracts\ShopServiceInterface;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function __construct(
        protected PropertyServiceInterface $propertyService,
        protected FloorServiceInterface $floorService,
        protected ShopServiceInterface $shopService
    )
    {}

    public function show(Shop $shop)
    {

    }

    public function search(Request $request)
    {
        $items = $this->shopService->search($request);

        return response()->json([
            'success' => true,
            'html' => view('agent.shop.reserved.floor-plan', [
                "shops" => $items,
                "floor" => $this->floorService->getFloorById($request->floor_id),
                "search" => true
            ])->render()
        ]);
    }

    public function getReservationBody(Request $request)
    {
        $floor = $request->filled('floor_id')
            ? $this->floorService->getFloorById($request->floor_id)
            : null;

        $shops = $floor?->shops()->paginate(10);

        return response()->json([
            'success' => true,
            'next_page_url' => $shops?->nextPageUrl(),
            'html' => view('agent.shop.reserved.floor-plan', compact('floor', 'shops'))->render(),
        ]);
    }
}
