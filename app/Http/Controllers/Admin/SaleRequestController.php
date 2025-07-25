<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Agent\SaleRequest\StoreSaleRequestRequest;
use App\Models\Property;
use App\Services\Contracts\PropertyServiceInterface;
use App\Services\Contracts\SaleRequestServiceInterface;
use App\Utils\PageConfig;
use Illuminate\Http\Request;

class SaleRequestController extends Controller
{
    protected SaleRequestServiceInterface $service;
    protected PropertyServiceInterface $propertyService;
    protected object $pageConfig;

    public function __construct(SaleRequestServiceInterface $service, PropertyServiceInterface $propertyService)
    {
        $this->service = $service;
        $this->propertyService = $propertyService;

        $config = new PageConfig("saleRequest", 'admin.sale-request', "admin", "sale-request", [
            "create" => "admin.sale-request.create",
        ]);
        $this->pageConfig = $config->generatePageInfo();
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if( $request->ajax() ) {
            // Format the response in the structure required by DataTables
            return response()->json($this->service->getDataTable($request));
        }

        return view($this->pageConfig->view_root . '.index', [
            'pageConfig' => $this->pageConfig,
            'breadcrumbItems' => [
                ['name' => $this->pageConfig->name->feature, 'url' => route($this->pageConfig->routes->index), 'active' => true]
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Property $property)
    {
        return view($this->pageConfig->view_root . '.create', [
            'pageConfig' => $this->pageConfig,
            'property' => $property,
            'breadcrumbItems' => [
                ['name' => $this->pageConfig->name->feature, 'url' => route($this->pageConfig->routes->index), 'active' => false],
                ['name' => $this->pageConfig->create->title, 'url' => route($this->pageConfig->routes->create, $property), 'active' => true]
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSaleRequestRequest $request, Property $property)
    {
        $item = $this->service->storeSaleRequest($request->validated());

        if( !$item ) {
            return redirect()
                ->route( $this->pageConfig->routes->create, $property )
                ->withErrors($this->pageConfig->create->message->error )
                ->withInput();
        }

        return redirect()
            ->route($this->pageConfig->routes->index )
            ->withSuccess($this->pageConfig->create->message->success )
            ->withInput();
    }
}
