<?php

namespace App\Http\Controllers\Admin\Console;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Services\Contracts\PropertyServiceInterface;
use App\Services\Contracts\PropertySetupServiceInterface;
use App\Services\Contracts\PropertyTypeServiceInterface;
use App\Services\PropertyTypeService;
use App\Utils\PageConfig;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{

    public function __construct(
        protected PropertyServiceInterface $service,
        protected PropertySetupServiceInterface $setupService,
        protected PropertyTypeServiceInterface $typeService,
    )
    {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.console.properties.index', [
            "items" => $this->service->getAllProperties(),
        ]);
    }

    public function initValidation(Request $request)
    {
        $setup = $this->setupService->storePropertySetup($request);

        $html = view('admin.console.properties.request.add_property_modal', [
            'init' => $setup,
            "types" => $this->typeService->getAllPropertyTypes()
        ])->render();

        return response()->json([
            'html' => $html,
            'setup' => $setup
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = $this->service->storeProperty($request->all());

        if( !$item ) {
            return redirect()
                ->route("admin.console.property.index")
                ->withErrors("Failed to create the Property. Please try again.")
                ->withInput();
        }

        return redirect()
            ->route("admin.console.property.index")
            ->withSuccess("Property created successfully!")
            ->withInput();

    }

    /**
     * Display the specified resource.
     */
    public function show(Property $property)
    {
        return view('admin.console.properties.show', [
            "item" => $this->service->getPropertyById($property->id)
        ]);
    }

    public function edit(Property $property)
    {
        $item = $this->service->getPropertyById($property->id);

        return view('admin.console.properties.edit', [
            "item" => $item,
            "init" => $item->setup,
            "types" => $this->typeService->getAllPropertyTypes()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Property $property)
    {
        $item = $this->service->updateProperty($property, $request->all());

        if( !$item ) {
            return redirect()
                ->route("admin.console.property.index")
                ->withErrors("Unable to update the Property. Please try again.")
                ->withInput();
        }

        return redirect()
            ->route("admin.console.property.index")
            ->withSuccess("Property updated successfully!")
            ->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Property $property)
    {
        $status = $this->service->deleteProperty($property, $request->password);

        return response()->json([
            'success' => $status
        ]);
    }
}
