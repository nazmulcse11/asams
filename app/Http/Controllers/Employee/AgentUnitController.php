<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AgentUnit\BulkDestroyRequest;
use App\Http\Requests\Admin\AgentUnit\StoreRequest;
use App\Models\AgentUnit;
use App\Services\Contracts\AgentUnitServiceInterface;
use App\Utils\PageConfig;
use Illuminate\Http\Request;

class AgentUnitController extends Controller
{
    protected AgentUnitServiceInterface $service;
    protected object $pageConfig;

    public function __construct(AgentUnitServiceInterface $service)
    {
        $this->service = $service;

        $config = new PageConfig("AgentProperty", 'employee.agent-unit', "employee", "agent-unit", [
            "create" => "employee.agent-unit.create",
            "show" => "employee.agent-unit.show",
            "edit" => "employee.agent-unit.edit",
            "destroyBulk" => "employee.agent-unit.destroy.bulk",
            "unverified" => "employee.agent-unit.unverified.list",
            "verified" => "employee.agent-unit.verified.list",
            "verify" => "employee.agent-unit.verify",
            "installment" => "employee.installment.create",
            "installments" => "employee.installment.index",
            "sd_collection" => "employee.agent-unit.security-deposit-collection",
            "sd" => "employee.agent-unit.security-deposit",
        ]);
        $this->pageConfig = $config->generatePageInfo([
            "unverified" => [
                "title" => "Verify Agent Property",
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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->pageConfig->view_root . '.create', [
            'pageConfig' => $this->pageConfig,
            'breadcrumbItems' => [
                ['name' => $this->pageConfig->name->feature, 'url' => route($this->pageConfig->routes->index), 'active' => false],
                ['name' => $this->pageConfig->create->title, 'url' => route($this->pageConfig->routes->create), 'active' => true]
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $agentUnit = $this->service->storeAgentunit(array_merge($request->validated()));

        if( !$agentUnit ) {
            return redirect()
                ->route( $this->pageConfig->routes->create )
                ->withErrors($this->pageConfig->create->message->error )
                ->withInput();
        }

        return redirect()
            ->route($this->pageConfig->routes->index)
            ->withSuccess($this->pageConfig->create->message->success )
            ->withInput();
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

    public function unverifiedList(Request $request)
    {
        if( $request->ajax() ) {
            // Format the response in the structure required by DataTables
            return response()->json($this->service->getUnverifiedDataTable($request));
        }

        $this->pageConfig->index->title = $this->pageConfig->unverified->title;

        return view($this->pageConfig->view_root . '.unverified', [
            'pageConfig' => $this->pageConfig,
            'breadcrumbItems' => [
                ['name' => $this->pageConfig->name->feature, 'url' => route($this->pageConfig->routes->index), 'active' => false],
                ['name' => $this->pageConfig->unverified->title, 'url' => route($this->pageConfig->routes->unverified), 'active' => true]
            ]
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
