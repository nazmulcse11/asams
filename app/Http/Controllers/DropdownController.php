<?php

namespace App\Http\Controllers;

use App\Services\Dropdowns\Contracts\DropdownFactoryInterface;
use App\Services\Dropdowns\DropdownFactory;
use App\Utils\ExceptionHandler;
use Illuminate\Http\Request;

class DropdownController extends Controller
{
    protected DropdownFactoryInterface $dropdownFactory;

    public function __construct(DropdownFactoryInterface $dropdownFactory)
    {
        $this->dropdownFactory = $dropdownFactory;
    }

    public function fetch($type, Request $request)
    {
        // Optional: Pass query params as filters (for dependent dropdowns)
        $filters = $request->all();

        return ExceptionHandler::handle(function() use ($type, $filters) {
            $options = $this->dropdownFactory->getDropdown($type, $filters);
            return response()->json([
                'success' => true,
                'data' => $options
            ]);
        });
    }
}
