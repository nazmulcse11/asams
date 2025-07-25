<?php

namespace App\Services\Traits;

use App\Utils\ExceptionHandler;
use Illuminate\Http\Request;

trait BaseServiceTrait
{
    public function getDataTable(Request $request): array
    {
        return ExceptionHandler::handle(function() use ($request) {
            $draw = $request->input('draw');

            $items = $this->repository->getDataTableData($request);

            return [
                "draw" => intval($draw),                   // Draw parameter for DataTables sequence validation
                "recordsTotal" => $this->repository->count(),        // Total records in the database (without filters)
                "recordsFiltered" => $items->total(),  // Total records after filtering
                "data" => $items->items(),             // Data array for the current page
            ];
        }, []);
    }
}
