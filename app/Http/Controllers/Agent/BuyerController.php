<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Buyer\StoreRequest;
use App\Models\Buyer;
use App\Services\Contracts\BuyerServiceInterface;
use App\Utils\PageConfig;
use Illuminate\Http\Request;

class BuyerController extends Controller
{

    public function __construct(
        protected BuyerServiceInterface $service
    )
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('agent.buyer.index', [
            'items' => getCurrentAuthenticatedUser()
                    ?->properties
                    ?->first()
                    ?->buyers
                    ?->where('status_id', getStatusId("Buyer", "Approved")) ??
                collect(),
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
                ->route( "agent.buyer.index" )
                ->withErrors( "Unable to create buyer" )
                ->withInput();
        }

        return redirect()
            ->route( "agent.buyer.index" )
            ->withSuccess( "Buyer create request send successfully" )
            ->withInput();
    }

    public function show(Buyer $buyer)
    {
        dd($buyer);
    }
}
