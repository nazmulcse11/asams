<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Contracts\AgentServiceInterface;
use App\Services\Contracts\BuyerPaymentServiceInterface;
use App\Services\Contracts\BuyerServiceInterface;
use App\Services\Contracts\BuyerShopServiceInterface;
use App\Services\Contracts\PropertyServiceInterface;
use App\Services\Contracts\ShopServiceInterface;
use App\Utils\PageConfig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function __construct(
        protected PropertyServiceInterface $propertyService,
        protected ShopServiceInterface $shopService,
        protected BuyerServiceInterface $buyerService,
        protected AgentServiceInterface $agentService,
        protected BuyerPaymentServiceInterface $buyerPaymentService
    )
    {}

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $property = getCurrentProperty();
        return view('admin.dashboard', [
            'total' => arrayToObject([
                'shop' => $property->shops?->count() ?? 0,
                'buyer' => $property->buyers?->count() ?? 0,
                'agent' => $property->agents?->count() ?? 0,
                'vacant' => $this->shopService->getAllShops(["*"], ["status_id" => 49])->count(),
                'occupied' => $this->shopService->getAllShops(["*"], ["status_id" => 51])->count(),
            ]),
            'revenue' => $this->getInstallmentReport(),
            'transactions' => $this->buyerPaymentService->getAllBuyerPayments()
        ]);
    }

    public function getInstallmentReport()
    {
        // Fetch monthly grouped paid and due amounts
        $results = DB::table('installments')
            ->selectRaw("DATE_FORMAT(installment_date, '%Y-%m') as month")
            ->selectRaw('SUM(paid_amount) as total_paid')
            ->selectRaw('SUM(due_amount) as total_due')
            ->whereNotNull('installment_date')
            ->groupByRaw("DATE_FORMAT(installment_date, '%Y-%m')")
            ->orderByRaw("DATE_FORMAT(installment_date, '%Y-%m')")
            ->get();

        // Transform into required format
        $collectedData = [];
        $dueData = [];

        foreach ($results as $row) {
            $collectedData[] = (float)$row->total_paid;
            $dueData[] = (float)$row->total_due;
        }

        return [
            [
                'name' => 'Collected',
                'data' => $collectedData
            ],
            [
                'name' => 'Due',
                'data' => $dueData
            ]
        ];
    }
}
