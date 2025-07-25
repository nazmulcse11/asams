<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Administrator\BulkDestroyRequest;
use App\Http\Requests\Admin\Administrator\StoreRequest;
use App\Http\Requests\Admin\Administrator\UpdateRequest;
use App\Models\User;
use App\Services\Contracts\AdministratorServiceInterface;
use App\Utils\PageConfig;
use Illuminate\Http\Request;

class AdministatorController extends Controller
{
    protected AdministratorServiceInterface $service;


    public function __construct(AdministratorServiceInterface $service)
    {
        $this->service = $service;
        $config = new PageConfig("administrator", 'admin.administrator', "admin", "administrator", [
            "create" => "admin.administrator.create",
            "show" => "admin.administrator.show",
            "edit" => "admin.administrator.edit",
            "destroyBulk" => "admin.administrator.destroy.bulk"
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

        return view('admin.administrator.index', [
            'administrators' => $this->service->getAllAdministrators(),
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
        $item = $this->service->storeAdministrator($request->validated());

        if( !$item ) {
            return redirect()
                ->route( $this->pageConfig->routes->create )
                ->withErrors($this->pageConfig->create->message->error )
                ->withInput();
        }

        return redirect()
            ->route($this->pageConfig->routes->edit, $item)
            ->withSuccess($this->pageConfig->create->message->success )
            ->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show(User $administrator)
    {
        return view($this->pageConfig->view_root . '.show', [
            'item' => $administrator,
            'pageConfig' => $this->pageConfig,
            'breadcrumbItems' => [
                ['name' => $this->pageConfig->name->feature, 'url' => route($this->pageConfig->routes->index), 'active' => false],
                ['name' => $this->pageConfig->show->title, 'url' => route($this->pageConfig->routes->show, $administrator), 'active' => true]
            ]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $administrator)
    {
        return view($this->pageConfig->view_root . '.edit', [
            'item' => $administrator,
            'pageConfig' => $this->pageConfig,
            'breadcrumbItems' => [
                ['name' => $this->pageConfig->name->feature, 'url' => route($this->pageConfig->routes->index), 'active' => false],
                ['name' => $this->pageConfig->edit->title, 'url' => route($this->pageConfig->routes->edit, $administrator), 'active' => true]
            ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, User $administrator)
    {
        $item = $this->service->updateAdministrator($administrator, $request->validated());

        if( !$item ) {
            return redirect()
                ->route($this->pageConfig->routes->edit, $item)
                ->withErrors($this->pageConfig->edit->message->error )
                ->withInput();
        }

        return redirect()
            ->route($this->pageConfig->routes->edit, $item)
            ->withSuccess($this->pageConfig->edit->message->success)
            ->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $administrator)
    {
        $status = $this->service->deleteAdministrator($administrator);

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
        $status = $this->service->deleteBulkAdministrators($request->ids);

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
