<?php

namespace App\Services\Contracts;

use App\Models\AdminReport;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Support\Collection;

interface AdminReportServiceInterface
{
    public function getPropertyBuyerShopDataTable(Request $request): array;
}
