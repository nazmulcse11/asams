<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AgentShop\StoreAgentShopRequest;
use App\Http\Requests\Admin\AgentUnit\StoreRequest;
use App\Services\Contracts\AgentUnitServiceInterface;
use App\Services\Contracts\ShopServiceInterface;
use App\Utils\PageConfig;
use Illuminate\Http\Request;

class AgentShopRequestController extends Controller
{

    protected AgentUnitServiceInterface $service;
    protected ShopServiceInterface $shopService;
    protected object $pageConfig;

    public function __construct(AgentUnitServiceInterface $service, ShopServiceInterface $shopService)
    {
        $this->service = $service;

        $this->shopService = $shopService;
        $config = new PageConfig("AgentShopRequest", 'admin.agent-shop-request', "admin", "agent-unit", [
            "index" => "admin.agent-unit.create",
            "store" => "admin.agent-unit.store",
            "floorMap" => "admin.agent-unit.agent-floor-map",
        ], false);

        $this->pageConfig = $config->generatePageInfo();
    }

    public function index()
    {
        return view($this->pageConfig->view_root . '.index', [
            'pageConfig' => $this->pageConfig,
            'breadcrumbItems' => [
                ['name' => $this->pageConfig->name->feature, 'url' => route($this->pageConfig->routes->index), 'active' => true],
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAgentShopRequest $request)
    {
        $agentUnit = $this->service->storeAgentunit($request->validated());

        if( !$agentUnit ) {
            return redirect()
                ->route( $this->pageConfig->routes->index )
                ->withErrors( $this->pageConfig->create->message->error )
                ->withInput();
        }

        return redirect()
            ->route( $this->pageConfig->routes->index )
            ->withSuccess( $this->pageConfig->create->message->success )
            ->withInput();
    }

    public function floorMap($id)
    {
        return response()->json([
            'success' => true,
            'data' => $this->service->getShopApprovedAgent($id)
        ]);
    }
}
