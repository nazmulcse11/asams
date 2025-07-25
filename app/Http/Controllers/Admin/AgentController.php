<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Agent\StoreRequest;
use App\Http\Requests\Admin\Agent\UpdateRequest;
use App\Http\Requests\Admin\Agent\BulkDestroyRequest;
use App\Models\Agent;
use App\Services\Contracts\AgentServiceInterface;
use App\Utils\PageConfig;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    protected AgentServiceInterface $service;

    protected object $pageConfig;

    public function __construct(AgentServiceInterface $service)
    {
        $this->service = $service;

        $config = new PageConfig("agent", 'admin.agent', "admin", "agent", [
            "create" => "admin.agent.create",
            "show" => "admin.agent.show",
            "edit" => "admin.agent.edit",
            "destroyBulk" => "admin.agent.destroy.bulk"
        ]);
        $this->pageConfig = $config->generatePageInfo();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view($this->pageConfig->view_root . '.index', [
            'items' => getCurrentProperty()?->agents,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $agent = $this->service->storeAgent($request->validated());

        if( !$agent ) {
            return redirect()
                ->route( "admin.agent.index" )
                ->withErrors( "Unable to create agent" )
                ->withInput();
        }

        return redirect()
            ->route( "admin.agent.index" )
            ->withSuccess( "Agent created successfully." )
            ->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show(Agent $agent)
    {
        return view('admin.agent.show', [
            'item' => $this->service->getAgentById($agent->id),
            'reserve' => $this->service->reserve($agent->id),
            'sold' => $this->service->sold($agent->id),
            'revenue' => $this->service->revenue($agent->id),
            'commission' => $this->service->commission($agent->id),
            'shops' => $agent->shops
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agent $agent)
    {
        return view($this->pageConfig->view_root . '.edit', [
            'item' => $agent,
            'pageConfig' => $this->pageConfig,
            'breadcrumbItems' => [
                ['name' => $this->pageConfig->name->feature, 'url' => route($this->pageConfig->routes->index), 'active' => false],
                ['name' => $this->pageConfig->edit->title, 'url' => route($this->pageConfig->routes->edit, $agent), 'active' => true]
            ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Agent $agent)
    {
        $agent = $this->service->updateAgent($agent, $request->validated());

        if( !$agent ) {
            return redirect()
                ->route($this->pageConfig->routes->edit, $agent)
                ->withErrors($this->pageConfig->edit->message->error )
                ->withInput();
        }

        return redirect()
            ->route($this->pageConfig->routes->edit, $agent)
            ->withSuccess($this->pageConfig->edit->message->success)
            ->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agent $agent)
    {
        $status = $this->service->deleteAgent($agent);

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
        $status = $this->service->deleteBulkAgents($request->ids);

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
}
