<?php

namespace App\Http\Controllers\Admin\Console;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\Contracts\AdministratorServiceInterface;
use App\Services\Contracts\AgentServiceInterface;
use App\Services\Contracts\BlockServiceInterface;
use App\Services\Contracts\BuyerServiceInterface;
use App\Services\Contracts\EmployeeServiceInterface;
use App\Services\Contracts\FloorServiceInterface;
use App\Services\Contracts\PropertyServiceInterface;
use App\Services\Contracts\ShopServiceInterface;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct(
        protected PropertyServiceInterface $propertyService,
        protected FloorServiceInterface $floorService,
        protected BlockServiceInterface $blockService,
        protected ShopServiceInterface $shopService,
        protected AdministratorServiceInterface $administratorService,
        protected EmployeeServiceInterface $employeeService,
        protected AgentServiceInterface $agentService,
        protected BuyerServiceInterface $buyerService,
    )
    {}

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $chartData = [
            'yearlyRevenue' => [
                'year' => [1991, 1992, 1993, 1994, 1995],
                'revenue' => [350, 500, 950, 700, 900],
                'total' => 3500,
                'currencySymbol' => '$',
            ],
            'productSold' => [
                'year' => [1991, 1992, 1993, 1994, 1995],
                'quantity' => [800, 600, 1000, 800, 900],
                'total' => 4000,
            ],
            'growth' => [
                'year' => [1991, 1992, 1993, 1994, 1995],
                'perYearRate' => [10, 20, 30, 40, 100],
                'total' => 10,
                'preSymbol' => '+',
                'postSymbol' => '%',
            ],
            'revenueReport' => [
                'month' => ["Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"],
                'revenue' => [
                    'title' => 'Revenue',
                    'data' => [76, 85, 101, 98, 87, 105, 91, 114, 94],
                ],
                'netProfit' => [
                    'title' => 'Net Profit',
                    'data' => [35, 41, 36, 26, 45, 48, 52, 53, 41],
                ],
                'cashFlow' => [
                    'title' => 'Cash Flow',
                    'data' => [44, 55, 57, 56, 61, 58, 63, 60, 66],
                ],
            ],
            'productGrowthOverview' => [
                'productNames' => ["Books", "Pens", "Pencils", "Box"],
                'data' => [88, 77, 66, 55],
            ],
            'thisYearGrowth' => [
                'label' => ['Yearly Growth'],
                'data' => [66],
            ],
            'investmentAmount' => [
                [
                    'title' => 'Investment',
                    'amount' => 1000,
                    'currencySymbol' => '$',
                    'profit' => 10,
                    'profitPercentage' => 50,
                    'loss' => 0,
                    'lossPercentage' => 0,
                ],
                [
                    'title' => 'Investment',
                    'amount' => 1000,
                    'currencySymbol' => '$',
                    'profit' => 10,
                    'profitPercentage' => 50,
                    'loss' => 0,
                    'lossPercentage' => 0,
                ],
                [
                    'title' => 'Investment',
                    'amount' => 1000,
                    'currencySymbol' => '$',
                    'profit' => 0,
                    'profitPercentage' => 0,
                    'loss' => 20,
                    'lossPercentage' => 30,
                ]
            ],
            'users' => User::latest()->paginate(5),
        ];

        return view('admin.console.dashboard', [
            'pageTitle' => 'Analytic Dashboard',
            'data' => collect($chartData),
            'cardCountData' => arrayToObject([
                "property" => $this->propertyService->getAllProperties()->count(),
                "floor" => $this->floorService->getAllFloors()->count(),
                "block" => $this->blockService->getAllBlocks()->count(),
                "shop" => $this->shopService->getAllShops()->count(),
                "administrator" => $this->administratorService->getAllAdministrators()->count(),
                "employee" => $this->employeeService->getAllEmployees()->count(),
                "agent" => $this->agentService->getAllAgents()->count(),
                "buyer" => $this->buyerService->getAllBuyers()->count(),
            ]),
            "recentProperties" => $this->propertyService->getAllProperties()->take(5),
            "recentAgents" => $this->agentService->getAllAgents()->take(5),
        ]);
    }
}
