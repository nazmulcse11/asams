<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Buyer\BulkDestroyRequest;
use App\Http\Requests\Admin\Buyer\StoreRequest;
use App\Models\Buyer;
use App\Services\Contracts\BuyerServiceInterface;
use App\Utils\PageConfig;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    protected BuyerServiceInterface $service;
    protected object $pageConfig;

    public function __construct(BuyerServiceInterface $service)
    {
        $this->service = $service;

        $config = new PageConfig("buyer", 'employee.buyer', "employee", "buyer", [
            "create" => "employee.buyer.create",
            "show" => "employee.buyer.show",
            "edit" => "employee.buyer.edit",
            "destroyBulk" => "employee.buyer.destroy.bulk"
        ]);
        $this->pageConfig = $config->generatePageInfo();
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('employee.buyer.index', [
            'items' => getCurrentProperty()
                ?->buyers
                ?->where("status_id", getStatusId("buyer", "approved")),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function request(Request $request)
    {
        return view('employee.buyer.request', [
            'items' => getCurrentProperty()
                ?->buyers
                ?->where("status_id", getStatusId("buyer", "pending")),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $buyer = $this->service->storeBuyer($request->validated());

        if( !$buyer ) {
            return redirect()
                ->route( $this->pageConfig->routes->create )
                ->withErrors($this->pageConfig->create->message->error )
                ->withInput();
        }

        return redirect()
            ->route($this->pageConfig->routes->edit, $buyer)
            ->withSuccess($this->pageConfig->create->message->success )
            ->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show(Buyer $buyer)
    {
        return view('employee.buyer.show', [
            'item' => $this->service->getBuyerById($buyer->id),
            'shops' => $buyer->shops,
            'bought' => $this->service->bought($buyer->id),
            'leased' => $this->service->leased($buyer->id),
            'total_payment' => $this->service->total_payments($buyer->id)
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function requestShow(Buyer $buyer)
    {
        return view('employee.buyer.request-show', [
            'item' => $this->service->getBuyerById($buyer->id)
        ]);
    }

    public function requestApprove(Buyer $buyer)
    {
        $status = $this->service->approveBuyer($buyer);

        if( !$status ) {
            return redirect()
                ->route( "employee.buyer.request" )
                ->withErrors("Buyer could not be approved");
        }

        return redirect()
            ->route("employee.buyer.index")
            ->withSuccess("Buyer has been approved");
    }

    public function requestReject(Buyer $buyer)
    {
        $status = $this->service->rejectBuyer($buyer);

        if( !$status ) {
            return redirect()
                ->route( "employee.buyer.request" )
                ->withErrors("Buyer could not be rejected");
        }

        return redirect()
            ->route("employee.buyer.index")
            ->withSuccess("Buyer has been rejected");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buyer $buyer)
    {
        return view($this->pageConfig->view_root . '.edit', [
            'item' => $buyer,
            'pageConfig' => $this->pageConfig,
            'breadcrumbItems' => [
                ['name' => $this->pageConfig->name->feature, 'url' => route($this->pageConfig->routes->index), 'active' => false],
                ['name' => $this->pageConfig->edit->title, 'url' => route($this->pageConfig->routes->edit, $buyer), 'active' => true]
            ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buyer $buyer)
    {
        $buyer = $this->service->updateBuyer($buyer, $request->validated());

        if( !$buyer ) {
            return redirect()
                ->route($this->pageConfig->routes->edit, $buyer)
                ->withErrors($this->pageConfig->edit->message->error )
                ->withInput();
        }

        return redirect()
            ->route($this->pageConfig->routes->edit, $buyer)
            ->withSuccess($this->pageConfig->edit->message->success)
            ->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buyer $buyer)
    {
        $status = $this->service->deleteBuyer($buyer);

        if( !$status ) {
            return response()->json([
                'success' => false,
                'message' => $this->pageConfig->delete->message->error
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => $this->pageConfig->delete->message->success
        ]);
    }
}
