<?php

namespace App\Http\Controllers\Any;

use App\Http\Controllers\Controller;
use App\Services\Contracts\AgentPaymentServiceInterface;
use App\Services\Contracts\AgentShopServiceInterface;
use App\Services\Contracts\BuyerShopServiceInterface;
use App\Services\Contracts\ShopServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class ShopSaleController extends Controller
{
    public function __construct(
        protected ShopServiceInterface $shopService,
        protected AgentShopServiceInterface $agentShopService,
        protected AgentPaymentServiceInterface $agentPaymentService,
        protected BuyerShopServiceInterface $buyerShopService
    )
    {
    }

    public function saleForm(Request $request)
    {
        if(!$request->has('reserve_id')) {
            return response()->json([
                'success' => false,
            ]);
        }

        $item = $this->agentShopService->getAgentShopById($request->reserve_id);

        return response()->json([
            'success' => true,
            'html' => view('any.modal.sale_request', [
                'item' => $item,
            ])->render()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'reserve_id'  => 'required|exists:agent_shops,id',
            'sell_amount' => 'required|numeric|min:1',
            'buyer_id'    => 'required|exists:buyers,id',
            'notes'       => 'nullable|string|max:1000',
        ]);
        $agentShop = \App\Models\AgentShop::find($validated['reserve_id']);
        if ($agentShop && $validated['sell_amount'] < $agentShop->sale_price) {
            throw ValidationException::withMessages([
                'sell_amount' => ['Sell amount cannot be less than the agent sale price (' . $agentShop->sale_price . ').'],
            ]);
        }

        $status = $this->buyerShopService->storeBuyerShop($validated);

        if (!$status) {
            return response()->json([
                'success' => false,
            ]);
        }

        return response()->json([
            'success' => true,
        ]);
    }

    public function modalForm(Request $request)
    {
        if(!$request->has('shop_id')) {
            return response()->json([
                'success' => false,
            ]);
        }

        $item = $this->shopService->getShopById($request->shop_id);

        return response()->json([
            'success' => true,
            'html' => view('any.modal.sale_request', [
                'shop' => $item,
            ])->render()
        ]);
    }

    public function verifyRequest(Request $request)
    {
        $status = $this->buyerShopService->verifyRequest($request->all());

        if (!$status) {
            return redirect()
                ->back()
                ->with('error', 'Failed to verify request');
        }

        return redirect()
            ->back()
            ->with('success', 'Request verified successfully');
    }

    public function approveRequest(Request $request)
    {
        $status = $this->buyerShopService->approveRequest($request->all());

        if (!$status) {
            return redirect()
                ->back()
                ->with('error', 'Failed to approve request');
        }

        return redirect()
            ->back()
            ->with('success', 'Request approved successfully');
    }

    public function rejectRequest(Request $request)
    {
        $status = $this->buyerShopService->rejectRequest($request->all());

        if (!$status) {
            return redirect()
                ->back()
                ->with('error', 'Failed to reject request');
        }

        return redirect()
            ->back()
            ->with('success', 'Request rejected successfully');
    }

    public function installmentForm(Request $request)
    {
        if(!$request->has('shop_id')) {
            return response()->json([
                'success' => false,
            ]);
        }

        $item = $this->shopService->getShopById($request->shop_id);

        return response()->json([
            'success' => true,
            'html' => view('any.modal.sale_request', [
                'shop' => $item,
            ])->render()
        ]);
    }

    public function installmentStore(Request $request)
    {

    }
}
