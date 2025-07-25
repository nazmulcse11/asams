<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BuyerPayment\StoreRequest;
use App\Models\BuyerPayment;
use App\Services\Contracts\BuyerPaymentServiceInterface;
use App\Utils\PageConfig;
use Illuminate\Http\Request;

class BuyerPaymentController extends Controller
{
    protected BuyerPaymentServiceInterface $service;
    protected object $pageConfig;

    public function __construct(BuyerPaymentServiceInterface $service)
    {
        $this->service = $service;

        $config = new PageConfig("buyerPayment", 'employee.buyer-payment', "employee", "buyer-payment", [
            "create" => "employee.buyer-payment.create",
            "show" => "employee.buyer-payment.show",
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
    public function create()
    {
        return view($this->pageConfig->view_root . '.create', [
            'pageConfig' => $this->pageConfig,
            'breadcrumbItems' => [
                ['name' => $this->pageConfig->name->feature, 'url' => route($this->pageConfig->routes->index), 'active' => false],
                ['name' => $this->pageConfig->create->title, 'url' => route($this->pageConfig->routes->create), 'active' => true]
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $item = $this->service->storeBuyerPayment($request->validated());

        if( !$item ) {
            return redirect()
                ->route( $this->pageConfig->routes->create )
                ->withErrors($this->pageConfig->create->message->error )
                ->withInput();
        }

        return redirect()
            ->route($this->pageConfig->routes->index)
            ->withSuccess($this->pageConfig->create->message->success )
            ->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show(BuyerPayment $buyerPayment)
    {
        return view($this->pageConfig->view_root . '.show', [
            'item' => $this->service->getBuyerPaymentById($buyerPayment->id),
            'pageConfig' => $this->pageConfig,
            'breadcrumbItems' => [
                ['name' => $this->pageConfig->name->feature, 'url' => route($this->pageConfig->routes->index), 'active' => false],
                ['name' => $this->pageConfig->show->title, 'url' => route($this->pageConfig->routes->show, $buyerPayment), 'active' => true]
            ]
        ]);
    }
}
