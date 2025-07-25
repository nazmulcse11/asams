<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Contracts\AdminReportServiceInterface;
use App\Utils\PageConfig;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    protected AdminReportServiceInterface $service;
    protected object $pageConfig;

    public function __construct(AdminReportServiceInterface $service)
    {
        $this->service = $service;

        $config = new PageConfig("Report", 'admin.report', "admin", "report", [
            "propertyBuyerShop" => "admin.report.property-buyer-shop",
            ], false);

        $this->pageConfig = $config->generatePageInfo();
    }

    public function propertyBuyerShopReport(Request $request)
    {
        if( $request->ajax() ) {
            return response()->json( $this->service->getPropertyBuyerShopDataTable($request));
        }

        return view($this->pageConfig->view_root . ".property-buyer-shop-report", [
            'pageConfig' => $this->pageConfig,
            'breadcrumbItems' => [
                ['name' => $this->pageConfig->name->feature, 'url' => route($this->pageConfig->routes->propertyBuyerShop), 'active' => true]
            ]
        ]);
    }

    public function index()
    {
        return view("admin.report.index");
    }

    public function show(string $id)
    {
        return view("admin.report.details");
    }

}
