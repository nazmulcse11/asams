<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AgentUnit\BulkDestroyRequest;
use App\Http\Requests\Admin\AgentUnit\StoreRequest;
use App\Models\AgentUnit;
use App\Models\Shop;
use App\Services\Contracts\AgentUnitServiceInterface;
use App\Services\Contracts\ShopServiceInterface;
use App\Utils\PageConfig;
use Illuminate\Http\Request;

class AgentUnitController extends Controller
{
    protected AgentUnitServiceInterface $service;
    protected ShopServiceInterface $shopService;
    protected object $pageConfig;

    public function __construct(AgentUnitServiceInterface $service, ShopServiceInterface $shopService)
    {
        $this->service = $service;
        $this->shopService = $shopService;

        $config = new PageConfig("AgentShop", 'admin.agent-unit', "admin", "agent-unit", [
            "create" => "admin.agent-unit.create",
            "show" => "admin.agent-unit.show",
            "edit" => "admin.agent-unit.edit",
            "destroyBulk" => "admin.agent-unit.destroy.bulk",
            "unverified" => "admin.agent-unit.unverified.list",
            "approve" => "admin.agent-unit.approve",
            "verified" => "admin.agent-unit.verified.list",
            "verify" => "admin.agent-unit.verify",
            "installment" => "admin.installment.create",
            "installments" => "admin.installment.index",
            "sd_collection" => "admin.agent-unit.security-deposit-collection",
            "sd" => "admin.agent-unit.security-deposit",
        ]);
        $config->setCreatePage("Agent request", "New Agent shop created successfully!", "Faild to create Agent shop!");
        $this->pageConfig = $config->generatePageInfo([
            "unverified" => [
                "title" => "Agent Request Verify",
            ],
            "approve" => [
                "title" => "Approve Agent Request",
            ],
            "verified" => [
                "title" => "Set Property Installment",
            ],
            "verify" => [
                "modal" => [
                    "title" => "Verify Agent Property",
                    "button" => "Verify",
                ],
            ],
            "sd_collection" => [
                "title" => "Security Deposit Collection",
            ],
            "sd" => [
                "modal" => [
                    "title" => "Security Deposit Collection",
                    "button" => "Verify",
                ],
            ],
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if( $request->ajax() ) {
            // Format the response in the structure required by DataTables
            return response()->json($this->service->getDataTable($request));
        }

        return view($this->pageConfig->view_root . '.index', [
            'pageConfig' => $this->pageConfig,
            'breadcrumbItems' => [
                ['name' => $this->pageConfig->name->feature, 'url' => route($this->pageConfig->routes->index), 'active' => true]
            ]
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(AgentUnit $agentUnit, Request $request)
    {
        // for modal to get data
        if( $request->ajax() ) {
            return response()->json([
                "success" => true,
                "data" => $this->service->getAgentUnitById($agentUnit->id)
            ]);
        }

        return view($this->pageConfig->view_root . '.show', [
            'item' => $agentUnit,
            'pageConfig' => $this->pageConfig,
            'breadcrumbItems' => [
                ['name' => $this->pageConfig->name->feature, 'url' => route($this->pageConfig->routes->index), 'active' => false],
                ['name' => $this->pageConfig->show->title, 'url' => route($this->pageConfig->routes->show, $agentUnit), 'active' => true]
            ]
        ]);
    }

    public function unverifiedList(Request $request)
    {
        $this->pageConfig->index->title = $this->pageConfig->unverified->title;

        return view($this->pageConfig->view_root . '.unverified', [
            'pageConfig' => $this->pageConfig,
            'breadcrumbItems' => [
                ['name' => $this->pageConfig->name->feature, 'url' => route($this->pageConfig->routes->index), 'active' => false],
                ['name' => $this->pageConfig->unverified->title, 'url' => route($this->pageConfig->routes->unverified), 'active' => true]
            ]
        ]);
    }

    public function approveUnit(Shop $shop, Request $request)
    {
        if ($request->isMethod('post')) {
            $status = $this->service->approveAgentUnit($request->agent);
            if( !$status ) {
                return back()->withInput();
            }

            return back();
        }

        return view($this->pageConfig->view_root . '.approve-unit', [
            'pageConfig' => $this->pageConfig,
            "item" => $this->shopService->getShopByIdWithAgentUnit($shop->id),
            'breadcrumbItems' => [
                ['name' => $this->pageConfig->name->feature, 'url' => route($this->pageConfig->routes->index), 'active' => false],
                ['name' => $this->pageConfig->create->title, 'url' => route($this->pageConfig->routes->create), 'active' => true]
            ]
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AgentUnit $agentUnit)
    {
        $status = $this->service->deleteAgentUnit($agentUnit);

        if( !$status ) {
            return response()->json([
                'success' => false,
                'message' => $this->pageConfig->delete->message->error
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => $this->pageConfig->delete->message->success
        ]);
    }

    public function destroyBulk(BulkDestroyRequest $request)
    {
        $status = $this->service->deleteBulkAgentUnits($request->ids);

        if( !$status ) {
            return response()->json([
                'success' => false,
                'message' => $this->pageConfig->deleteBulk->message->error
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => $this->pageConfig->deleteBulk->message->success
        ]);
    }

    public function verifiedList(Request $request)
    {
        if( $request->ajax() ) {
            // Format the response in the structure required by DataTables
            return response()->json($this->service->getVerifiedDataTable($request));
        }

        $this->pageConfig->index->title = $this->pageConfig->verified->title;

        return view($this->pageConfig->view_root . '.verified', [
            'pageConfig' => $this->pageConfig,
            'breadcrumbItems' => [
                ['name' => $this->pageConfig->name->feature, 'url' => route($this->pageConfig->routes->index), 'active' => false],
                ['name' => $this->pageConfig->verified->title, 'url' => route($this->pageConfig->routes->verified), 'active' => true]
            ]
        ]);
    }

    public function verify(AgentUnit $agentUnit, Request $request)
    {
        $status = $this->service->verifyAgentUnit($agentUnit, $request->only(['commission', 'security_money']));
        return response()->json(["success" => $status, "item" => $agentUnit]);
    }

    public function securityDepositCollection(Request $request)
    {
        if( $request->ajax() ) {
            // Format the response in the structure required by DataTables
            return response()->json($this->service->getVerifiedDataTable($request));
        }

        $this->pageConfig->index->title = $this->pageConfig->sd_collection->title;

        return view($this->pageConfig->view_root . '.sd', [
            'pageConfig' => $this->pageConfig,
            'breadcrumbItems' => [
                ['name' => $this->pageConfig->name->feature, 'url' => route($this->pageConfig->routes->index), 'active' => false],
                ['name' => $this->pageConfig->sd_collection->title, 'url' => route($this->pageConfig->routes->sd_collection), 'active' => true]
            ]
        ]);
    }

    public function securityDeposit(AgentUnit $agent_unit, Request $request)
    {
        $status = $this->service->securityDeposit($agent_unit, $request->all());
        return response()->json(["success" => $status]);
    }
}
