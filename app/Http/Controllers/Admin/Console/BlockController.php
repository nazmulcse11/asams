<?php

namespace App\Http\Controllers\Admin\Console;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Services\Contracts\BlockServiceInterface;
use App\Services\Contracts\FloorServiceInterface;
use Illuminate\Http\Request;

class BlockController extends Controller
{

    public function __construct(
        protected BlockServiceInterface $service,
        protected FloorServiceInterface $floorService
    )
    {}

    public function index(Request $request)
    {
        $filter = [];
        if($request->has('floor_id')) {
            $filter = ['floor_id' => $request->floor_id];
        }

        $items = $this->service->getAllBlocks($filter);

        return response()->json([
            'success' => true,
            'html' => view('admin.console.properties.request.block_modal', [
                'items' => $items,
                "floor" => $this->floorService->getFloorById($request->floor_id)
            ])->render()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = $this->service->storeBlock($request->all());

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
    public function update(Request $request, Block $block)
    {
        $item = $this->service->updateBlock($block, $request->all());

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
    public function destroy(Block $block)
    {
        $item = $this->service->deleteBlock($block);

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
