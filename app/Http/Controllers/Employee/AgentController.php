<?php

namespace App\Http\Controllers\Employee;

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
    public function __construct(protected AgentServiceInterface $service)
    {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('employee.agent.index', [
            'items' => getCurrentProperty()->agents,
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
                ->route( "employee.agent.index" )
                ->withErrors( "Unable to create agent" )
                ->withInput();
        }

        return redirect()
            ->route( "employee.agent.index" )
            ->withSuccess( "Agent created successfully." )
            ->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show(Agent $agent)
    {
        return view('employee.agent.show', [
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
        return view('employee.agent.edit', [
            'item' => $this->service->getAgentById($agent->id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Agent $agent)
    {
        $agent = $this->service->storeAgent($request->validated());

        if( !$agent ) {
            return redirect()
                ->route( "employee.agent.index" )
                ->withErrors( "Unable to update agent" )
                ->withInput();
        }

        return redirect()
            ->route( "employee.agent.edit", $agent->id )
            ->withSuccess( "Agent update successfully." )
            ->withInput();
    }
}
