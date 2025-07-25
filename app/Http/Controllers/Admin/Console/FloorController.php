<?php

namespace App\Http\Controllers\Admin\Console;

use App\Http\Controllers\Controller;
use App\Models\Floor;
use App\Services\Contracts\FloorServiceInterface;
use Illuminate\Http\Request;

class FloorController extends Controller
{

    protected FloorServiceInterface $service;

    public function __construct(FloorServiceInterface $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $floor = null;
        if ($request->has("floor_id")){
            $floor = $this->service->getFloorById($request->floor_id);
        }

        $shops = $floor->shops()->paginate(10);

        return response()->json([
            'success' => true,
            'next_page_url' => $shops->nextPageUrl(),
            'html' => view('admin.console.properties.request.floor_body', [
                'floor' => $floor,
                'shops' => $shops,
            ])->render()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = $this->service->storeFloor($request->all());

        if( !$item ) {
            return response()->json([
                'success' => false,
            ]);
        }

        return response()->json([
            'success' => true,
            'data' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Floor $floor)
    {
        $item = $this->service->updateFloor($floor, $request->all());

        if( !$item ) {
            return response()->json([
                'success' => false,
            ]);
        }

        return response()->json([
            'success' => true,
            'data' => $item
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Floor $floor)
    {
        $item = $this->service->deleteFloor($floor);

        if( !$item ) {
            return response()->json([
                'success' => false,
            ]);
        }

        return response()->json([
            'success' => true,
        ]);
    }
}
