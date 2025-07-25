<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Notifications\AgentReserveNotification;
use App\Services\Contracts\FloorServiceInterface;
use App\Services\Contracts\PropertyServiceInterface;
use App\Services\Contracts\ShopServiceInterface;
use Illuminate\Http\Request;

class ShopController extends Controller
{

    protected object $pageConfig;

    public function __construct(
        protected PropertyServiceInterface $propertyService,
        protected FloorServiceInterface $floorService,
        protected ShopServiceInterface $shopService,
    )
    {}

    public function index(Request $request)
    {
        if($request->ajax()) {
            $floor = $request->filled('floor_id')
                ? $this->floorService->getFloorById($request->floor_id)
                : null;

            if($request->filled('filter')) {
                $notifications = auth('admin')->user()
                    ->notifications()
                    ->where('type', AgentReserveNotification::class)
                    ->where('data->type', $request->filter)
                    ->get();
                $shops = $this->shopService
                    ->getShopsForFloor($notifications, $request->floor_id)
                    ->paginate(10);
            } else {
                $shops = $floor?->shops()->paginate(10);
            }

            return response()->json([
                'success' => true,
                'next_page_url' => $shops?->nextPageUrl(),
                'html' => view('admin.shop.request.floor_body', compact('floor', 'shops'))->render(),
            ]);
        }

        return view('admin.shop.index', [
            "item" => $this->propertyService->getPropertyById(userPropertySelected(getCurrentAuthenticatedUser()))
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = $this->shopService->getShopById($id);

        if(!$item) {
            return response()->json([
                'success' => false,
            ]);
        }

        return response()->json([
            'success' => true,
            'data' => view('admin.shop.request.shop_details_modal', [
                'item' => $item
            ])->render()
        ]);
    }
}
