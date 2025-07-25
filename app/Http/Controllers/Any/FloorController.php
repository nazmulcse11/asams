<?php

namespace App\Http\Controllers\Any;

use App\Http\Controllers\Controller;
use App\Notifications\AgentReserveNotification;
use App\Notifications\AgentSecurityMoneyDepositNotification;
use App\Services\Contracts\FloorServiceInterface;
use App\Services\Contracts\ShopServiceInterface;
use Illuminate\Http\Request;

class FloorController extends Controller
{
    public function __construct(
        protected FloorServiceInterface $floorService,
        protected ShopServiceInterface $shopService
    )
    {}


    public function body(Request $request)
    {
        $floor = $request->filled('floor_id')
            ? $this->floorService->getFloorById($request->floor_id)
            : null;

        if($request->filled('filter')) {
            $notifications = getCurrentAuthenticatedUser()
                ->unreadnotifications()
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
            'html' => view('any.request.floor_body', [
                'floor' => $floor,
                'shops' => $shops,
                'card_name' => $request->card_name
            ])->render(),
        ]);
    }
}
