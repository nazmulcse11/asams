<?php

namespace App\Http\Controllers\Any;

use App\Http\Controllers\Controller;
use App\Services\Contracts\AgentPaymentServiceInterface;
use App\Services\Contracts\AgentShopServiceInterface;
use App\Services\Contracts\ShopServiceInterface;
use Illuminate\Http\Request;

class ShopReserveController extends Controller
{
    public function __construct(
        protected ShopServiceInterface $shopService,
        protected AgentShopServiceInterface $agentShopService,
        protected AgentPaymentServiceInterface $agentPaymentService
    )
    {
    }

    public function reserveForm(Request $request)
    {
        if(!$request->has('shop_id')) {
            return response()->json([
                'success' => false,
            ]);
        }

        $shop = $this->shopService->getShopById($request->shop_id);

        return response()->json([
            'success' => true,
            'html' => view('any.modal.reserve_proposal', [
                'shop' => $shop,
            ])->render()
        ]);
    }

    public function verifyRequest(Request $request)
    {
        $validated = $request->validate([
            'reserve_id' => 'required|exists:agent_shops,id',
        ]);

        $status = $this->agentShopService->verify($validated['reserve_id']);

        if(!$status) {
            return redirect()
                ->back()
                ->withError('Failed to verify reserve');
        }

        return redirect()
            ->back()
            ->withSuccess('Successfully verified reserve');
    }

    public function approveRequest(Request $request)
    {
        $validated = $request->validate([
            'reserve_id' => 'required|exists:agent_shops,id',
            'shop_id' => 'required|exists:shops,id',
        ]);

        $status = $this->agentShopService->approve($validated['shop_id'], $validated['reserve_id']);

        if(!$status) {
            return redirect()
                ->back()
                ->withError('Failed to approve reserve');
        }

        return redirect()
            ->back()
            ->withSuccess('Successfully approved reserve');
    }

    public function rejectRequest(Request $request)
    {
        $validated = $request->validate([
            'reserve_id' => 'required|exists:agent_shops,id',
        ]);

        $status = $this->agentShopService->reject($validated['reserve_id']);

        if(!$status) {
            return redirect()
                ->back()
                ->withError('Failed to reject reserve');
        }

        return redirect()
            ->back()
            ->withSuccess('Successfully reject reserve');
    }

    public function securityForm(Request $request)
    {
        if(!$request->has('reserve_id')) {
            return response()->json([
                'success' => false,
            ]);
        }

        $item = $this->agentShopService->getAgentShopById($request->reserve_id);

        return response()->json([
            'success' => true,
            'html' => view('any.modal.security_deposit', [
                'item' => $item,
            ])->render()
        ]);
    }

    public function securityDeposit(Request $request)
    {
        $request->validate([
            'reserve_id' => ['required', 'exists:agent_shops,id'],
            'amount' => ['required', 'numeric', 'min:1'],
            'date' => ['required', 'date', 'before_or_equal:today'],
            'payment_mode_id' => ['required', 'exists:payment_modes,id'],
            'reference' => ['required', 'string', 'max:255'],
            'document_path' => ['required', 'file', 'max:6000'],
            'notes' => ['nullable', 'string'],
        ]);

        $item = $this->agentPaymentService->storeAgentPayment($request);

        if(!$item) {
            return redirect()
                ->back()
                ->withError("Payment information store failed");
        }
        return redirect()
            ->back()
            ->withSuccess("Payment information stored successfully");
    }

    public function securityApproveModal(Request $request)
    {
        if(!$request->has('agent_payment_id')) {
            return response()->json([
                'success' => false,
            ]);
        }

        $item = $this->agentPaymentService->getAgentPaymentById($request->agent_payment_id);

        return response()->json([
            'success' => true,
            'html' => view('any.modal.security_deposit_approve', [
                'item' => $item,
            ])->render()
        ]);
    }

    public function securityVerify(Request $request)
    {
        if(!$request->has('agent_payment_id')) {
            return response()->json([
                'success' => false,
            ]);
        }

        $item = $this->agentPaymentService->verify($request->agent_payment_id, $request->notes);

        if(!$item) {
            return response()->json([
                'success' => false,
                'data' => $item
            ]);
        }

        return response()->json([
            'success' => true,
        ]);
    }

    public function securityApprove(Request $request)
    {
        if(!$request->has('agent_payment_id')) {
            return response()->json([
                'success' => false,
            ]);
        }

        $item = $this->agentPaymentService->approve($request->agent_payment_id, $request->notes);

        if(!$item) {
            return response()->json([
                'success' => false,
            ]);
        }

        return response()->json([
            'success' => true,
        ]);
    }

    public function securityReject(Request $request)
    {
        if(!$request->has('agent_payment_id')) {
            return response()->json([
                'success' => false,
            ]);
        }

        $item = $this->agentPaymentService->reject($request->agent_payment_id, $request->notes);

        if(!$item) {
            return response()->json([
                'success' => false,
            ]);
        }

        return response()->json([
            'success' => true,
        ]);
    }
}
