<?php

namespace App\Http\Controllers;

use App\Services\Contracts\FloorServiceInterface;
use App\Services\Contracts\ShopServiceInterface;
use App\Services\FloorComponentService;
use App\Utils\PageConfig;
use Illuminate\Http\Request;

class FloorPlanController extends Controller
{

    protected FloorServiceInterface $floorService;
    protected FloorComponentService $floorComponentService;
    protected ShopServiceInterface $shopService;
    protected object $pageConfig;

    public function __construct(FloorServiceInterface $floorService, FloorComponentService $floorComponentService, ShopServiceInterface $shopService)
    {
        $this->floorService = $floorService;
        $this->floorComponentService = $floorComponentService;
        $this->shopService = $shopService;

        $config = new PageConfig("FloorPlan", 'admin.property', "", "property", [
            "index" => "admin.property.floor-plan",
            "store" => "admin.shop.store",
            "floor" => "floor-plan.floor",
            "update_position" => "floor-plan.update-position",
            "delete" => "floor-plan.delete-shop",
            "add_component" => "floor-plan.store-component",
            "updateComponent" => "floor-plan.update-component-position",
            "deleteComponent" => "floor-plan.delete-component",
        ], false);
        $this->pageConfig = $config->generatePageInfo();
    }

    public function index()
    {
        return view('admin.property.floor-plan', [
            'pageTitle' => 'Admin Dashboard',
            "pageConfig" => $this->pageConfig,
            'breadcrumbItems' => [
                ['name' => $this->pageConfig->name->feature, 'url' => route($this->pageConfig->routes->index), 'active' => true]
            ]
        ]);
    }

    public function floor($id)
    {
        return response()->json([
            "success" => true,
            "data" => $this->floorService->floorPlan($id)
        ]);
    }

    public function agentShops($floor, $agent)
    {
        return response()->json([
            "success" => true,
            "data" => $this->floorService->agentShops($floor, $agent)
        ]);
    }

    public function storeComponent(Request $request)
    {
        $validated = $request->validate([
            'floor_id' => 'required|integer|exists:floors,id',
            'type' => 'required|string',
            'x_position' => 'required|numeric|min:-1',
            'y_position' => 'required|numeric|min:-1',
            'width' => 'nullable|numeric|min:0',
            'height' => 'nullable|numeric|min:0',
        ]);

        return response()->json([
            "success" => true,
            "data" => $this->floorComponentService->storeFloorComponent($validated)
        ]);
    }

    public function updatePosition(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer|exists:shops,id',
            'x_feet' => 'required|numeric|min:-1',
            'y_feet' => 'required|numeric|min:-1',
            'width_feet' => 'nullable|numeric|min:0',
            'height_feet' => 'nullable|numeric|min:0',
        ]);

        return response()->json([
            "success" => true,
            "data" => $this->shopService->updateShopPosition($validated)
        ]);
    }

    public function updateComponentPosition(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer|exists:shops,id',
            'x_position' => 'required|numeric|min:-1',
            'y_position' => 'required|numeric|min:-1',
            'width' => 'nullable|numeric|min:0',
            'height' => 'nullable|numeric|min:0',
        ]);

        return response()->json([
            "success" => true,
            "data" => $this->floorComponentService->updateFloorComponent($validated)
        ]);
    }

    public function delete(mixed $id)
    {
        $shop = $this->shopService->getShopById($id);
        return response()->json([
            "success" => true,
            "data" => $this->shopService->deleteShop($shop)
        ]);
    }

    public function deleteComponent(mixed $id)
    {
        $component = $this->floorComponentService->getFloorComponentById($id);
        return response()->json([
            "success" => true,
            "data" => $this->floorComponentService->deleteFloorComponent($component)
        ]);
    }
}
