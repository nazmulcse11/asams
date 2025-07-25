<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Installment\StoreRequest;
use App\Models\AgentUnit;
use App\Services\Contracts\AgentServiceInterface;
use App\Services\Contracts\BuyerShopServiceInterface;
use App\Services\Contracts\InstallmentServiceInterface;
use App\Utils\PageConfig;
use Illuminate\Http\Request;

class InstallmentController extends Controller
{
    public function __construct(
        protected BuyerShopServiceInterface $buyerShopService,
        protected InstallmentServiceInterface $installmentService
    )
    {
    }

    public function modalForm(Request $request)
    {
        if(!$request->has('buyer_shop_id')) {
            return response()->json([
                'success' => true,
            ]);
        }

        $buyerShop = $this->buyerShopService->getBuyerShopById($request->buyer_shop_id);

        return response()->json([
            'success' => true,
            'html' => view('employee.partials.modal.installment', [
                'item' => $buyerShop
            ])->render()
        ]);
    }

    public function storeInstallmentPlan(Request $request)
    {
        $validated = $request->validate([
            '_token' => 'required|string',
            'booking_money' => 'required|numeric',
            'buyer_shop_id' => 'required|integer|exists:buyer_shops,id',
            'payment_type_id' => 'required|integer|exists:payment_types,id',
            'management_fee' => 'nullable|numeric', // 'rr' is invalid, so numeric validation here
            'notes' => 'nullable|string',

            'amount_installment' => 'required|array',
            'amount_installment.*' => 'required|numeric|min:0',

            'payment_date' => 'required|array',
            'payment_date.*' => 'required|date_format:Y-m-d',

            'installment_remarks' => 'required|array',
            'installment_remarks.*' => 'nullable|string',
        ]);

        dd($request->validated());
    }
}
