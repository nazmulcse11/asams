<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Contracts\AgentPaymentServiceInterface;
use Illuminate\Http\Request;

class PaymentCommissionController extends Controller
{
    protected object $pageConfig;

    public function __construct(
        protected AgentPaymentServiceInterface $agentPaymentService
    )
    {}

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('admin.payment-commission.index', [
            "agentPayments" => $this->agentPaymentService->getAllAgentPayments()
        ]);
    }
}
