<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\AgentPaymentRepositoryInterface;
use App\Services\Contracts\AgentPaymentServiceInterface;
use App\Services\Contracts\ShopServiceInterface;
use Illuminate\Http\Request;

class PaymentCollectionController extends Controller
{

    public function __construct(
        protected AgentPaymentServiceInterface $agentPaymentService
    )
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('employee.payment-collection.index', [
            'agentPayments' => $this->agentPaymentService->getAllAgentPayments()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
}
