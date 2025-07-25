<?php

namespace App\Http\Controllers;

use App\Services\Contracts\UserPropertyLinkServiceInterface;
use Illuminate\Http\Request;

class UserPropertyController extends Controller
{
    public function __invoke(Request $request)
    {
        if( !$request->has('property_id') ) {
            return response()->json([
                "success" => false
            ]);
        }

        $selectedId = userPropertySelected(getCurrentAuthenticatedUser(), $request->property_id);

        if($selectedId != $request->property_id) {
            return response()->json([
                "success" => false,
                "data" => $selectedId
            ]);
        }

        return response()->json([
            "success" => true,
            "data" => $selectedId
        ]);
    }
}
