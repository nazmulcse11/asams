<?php

namespace App\Services\Contracts;

use App\Models\PropertySetup;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Support\Collection;

interface PropertySetupServiceInterface
{
    public function getPropertySetupById(mixed $id): ?PropertySetup;

    public function storePropertySetup(Request $request): ?PropertySetup;
}
