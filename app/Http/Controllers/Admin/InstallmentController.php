<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Installment\StoreInstallmentRequest;
use App\Http\Requests\Admin\Installment\StoreRequest;
use App\Models\AgentUnit;
use App\Services\Contracts\AgentServiceInterface;
use App\Services\Contracts\BuyerShopServiceInterface;
use App\Services\Contracts\InstallmentServiceInterface;
use App\Services\Contracts\ShopServiceInterface;
use App\Settings\BookingSettings;
use App\Utils\PageConfig;
use Illuminate\Http\Request;

class InstallmentController extends Controller
{
    protected InstallmentServiceInterface $service;
    protected AgentServiceInterface $agentService;
    protected ShopServiceInterface $shopService;
    protected BuyerShopServiceInterface $buyerShopService;

    protected object $pageConfig;

    public function __construct(
        InstallmentServiceInterface $service,
        AgentServiceInterface $agentService,
        ShopServiceInterface $shopService,
        BuyerShopServiceInterface $buyerShopService)
    {
        $this->service = $service;
        $this->agentService = $agentService;
        $this->shopService = $shopService;
        $this->buyerShopService = $buyerShopService;

        $config = new PageConfig("installment", 'admin.installment', "admin", "installment", [
            "index" => "admin.installment.index",
            "create" => "admin.installment.create",
            "store" => "admin.installment.store",
        ], false);
        $this->pageConfig = $config->generatePageInfo();
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view($this->pageConfig->view_root . '.index', [
            'pageConfig' => $this->pageConfig,
            'breadcrumbItems' => [
                ['name' => $this->pageConfig->name->feature, 'url' => route($this->pageConfig->routes->index), 'active' => true]
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($shop, $agent , Request $request, BookingSettings $settings)
    {
        return view($this->pageConfig->view_root . '.create', [
            'pageConfig' => $this->pageConfig,
            'item' => arrayToObject([
                "shop" => $this->shopService->getShopById($shop),
                "agent" => $this->agentService->getAgentById($agent),
                "settings" => $settings
            ]),
            'breadcrumbItems' => [
                ['name' => $this->pageConfig->name->feature, 'url' => route($this->pageConfig->routes->index), 'active' => false],
                ['name' => $this->pageConfig->create->title, 'url' => route($this->pageConfig->routes->create, [$shop, $agent]), 'active' => true]
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($shop, $agent , StoreInstallmentRequest $request)
    {
        $item = $this->buyerShopService->storeBuyerShop($request->all());
        if( !$item ) {
            return redirect()
                ->route( $this->pageConfig->routes->create, [$shop, $agent] )
                ->withErrors($this->pageConfig->create->message->error )
                ->withInput();
        }

        return redirect()
            ->route($this->pageConfig->routes->index)
            ->withSuccess($this->pageConfig->create->message->success )
            ->withInput();
    }
}
