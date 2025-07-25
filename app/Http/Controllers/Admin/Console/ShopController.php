<?php

namespace App\Http\Controllers\Admin\Console;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use App\Services\Contracts\FloorServiceInterface;
use App\Services\Contracts\ShopServiceInterface;
use Illuminate\Http\Request;

class ShopController extends Controller
{

    public function __construct(
        protected ShopServiceInterface $service,
        protected FloorServiceInterface $floorService
    )
    {
    }

    public function index(Request $request)
    {
        $items = $this->service->search($request);

        return response()->json([
            'success' => true,
            'html' => view('admin.console.properties.request.floor_body', [
                "shops" => $items,
                "floor" => $this->floorService->getFloorById($request->floor_id),
                "search" => true
            ])->render()
        ]);
    }

    public function form(Request $request)
    {
        return response()->json([
            'success' => true,
            'html' => view('admin.console.properties.request.shop_store_modal', [
                "floor" => $this->floorService->getFloorById($request->floor_id),
                "shop" => $request->shop_id ? $this->service->getShopById($request->shop_id) : null
            ])->render()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = array_merge($request->all(), ["uuid" => uuid()]);
        $item = $this->service->storeShop($data);

        return response()->json([
            'success' => $item ? true : false,
            'data' => $item
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Shop $shop)
    {
        $item = $this->service->getShopById($shop->id);

        if(!$item) {
            return response()->json([
                'success' => false,
            ]);
        }

        $html = view('admin.console.properties.request.shop_details_modal', [
            'item' => $item
        ])->render();

        return response()->json([
            'success' => true,
            'data' => $html
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shop $shop)
    {
        $item = $this->service->updateShop($shop, $request->all());

        return response()->json([
            'success' => $item ? true : false,
            'data' => $item
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Shop $shop)
    {
        $status = $this->service->deleteShop($shop->id, $request->password);

        return response()->json([
            'success' => $status
        ]);
    }
}
