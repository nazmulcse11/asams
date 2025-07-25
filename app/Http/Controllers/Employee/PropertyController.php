<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Property\BulkDestroyPropertyRequest;
use App\Http\Requests\Admin\Property\StorePropertyRequest;
use App\Http\Requests\Admin\Property\UpdatePropertyRequest;
use App\Models\Property;
use App\Services\Contracts\PropertyServiceInterface;
use App\Utils\PageConfig;
use Illuminate\Http\Request;

class PropertyController extends Controller
{

    protected PropertyServiceInterface $service;
    protected object $pageConfig;

    public function __construct(PropertyServiceInterface $service)
    {
        $this->service = $service;

        $config = new PageConfig("property", 'employee.property', "employee", "property", [
            "create" => "employee.property.create",
            "show" => "employee.property.show",
            "edit" => "employee.property.edit",
            "destroyBulk" => "employee.property.destroy.bulk",
            "floor_map" => "employee.property.floor-map",
            "sale_request" => "employee.sale-request.create",
        ]);
        $this->pageConfig = $config->generatePageInfo([
            "floor_map" => [
                "title" => "Property Floor Map",
            ],
        ]);
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
    public function store(StorePropertyRequest $request)
    {
        $item = $this->service->storeProperty($request->validated());

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
    public function show(Property $property)
    {
        return view($this->pageConfig->view_root . '.show', [
            'item' => $property,
            'pageConfig' => $this->pageConfig,
            'breadcrumbItems' => [
                ['name' => $this->pageConfig->name->feature, 'url' => route($this->pageConfig->routes->index), 'active' => false],
                ['name' => $this->pageConfig->show->title, 'url' => route($this->pageConfig->routes->show, $property), 'active' => true]
            ]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
        return view($this->pageConfig->view_root . '.edit', [
            'item' => $property,
            'pageConfig' => $this->pageConfig,
            'breadcrumbItems' => [
                ['name' => $this->pageConfig->name->feature, 'url' => route($this->pageConfig->routes->index), 'active' => false],
                ['name' => $this->pageConfig->edit->title, 'url' => route($this->pageConfig->routes->edit, $property), 'active' => true]
            ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePropertyRequest $request, Property $property)
    {
        $item = $this->service->updateProperty($property, $request->validated());

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
    public function destroy(Property $property)
    {
        $status = $this->service->deleteProperty($property);

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

    public function destroyBulk(BulkDestroyPropertyRequest $request)
    {
        $status = $this->service->deleteBulkProperties($request->ids);

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

    public function floorMap()
    {
        return view($this->pageConfig->view_root . ".floor-map", [
            "items" => $this->service->getAllProperties(),
            'pageConfig' => $this->pageConfig,
        ]);
    }
}
