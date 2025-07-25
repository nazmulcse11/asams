<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Buyer\BulkDestroyRequest;
use App\Http\Requests\Admin\Buyer\StoreRequest;
use App\Http\Requests\Admin\Buyer\UpdateRequest;
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

        $config = new PageConfig("buyer", 'admin.buyer', "admin", "buyer", [
            "create" => "admin.buyer.create",
            "show" => "admin.buyer.show",
            "edit" => "admin.buyer.edit",
            "destroyBulk" => "admin.buyer.destroy.bulk"
        ]);
        $this->pageConfig = $config->generatePageInfo();
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('admin.buyer.index', [
            'items' => getCurrentProperty()?->buyers,
        ]);
    }

    public function request(Request $request)
    {
        return view('admin.buyer.request', [
            'items' => getCurrentProperty()?->buyers,
        ]);
    }

    
    public function requestShow(Buyer $buyer)
    {
        return view('admin.buyer.request-show', [
            "item" => $buyer
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
                ->route( "admin.buyer.index" )
                ->withErrors( "Unable to create buyer" )
                ->withInput();
        }

        return redirect()
            ->route( "admin.buyer.index" )
            ->withSuccess( "Buyer Created Successfully" )
            ->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show(Buyer $buyer)
    {
        return view('admin.buyer.show', [
            'item' => $this->service->getBuyerById($buyer->id),
            'shops' => $buyer->shops,
            'bought' => $this->service->bought($buyer->id),
            'leased' => $this->service->leased($buyer->id),
            'total_payment' => $this->service->total_payments($buyer->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Buyer $buyer)
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

    public function destroyBulk(BulkDestroyRequest $request)
    {
        $status = $this->service->deleteBulkBuyers($request->ids);

        if( !$status ) {
            return response()->json([
                'success' => false,
                'message' => $this->pageConfig->deleteBulk->message->error
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => $this->pageConfig->deleteBulk->message->success
        ]);
    }
}
