<?php

namespace App\Services;

use App\Repositories\Contracts\PropertySetupRepositoryInterface;
use App\Services\Contracts\PropertySetupServiceInterface;
use App\Models\PropertySetup;
use App\Services\Traits\BaseServiceTrait;
use App\Utils\ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Support\Collection;

class PropertySetupService implements PropertySetupServiceInterface
{
    use BaseServiceTrait;

    protected PropertySetupRepositoryInterface $repository;

    public function __construct(PropertySetupRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getPropertySetupById(mixed $id): ?PropertySetup
    {
        return ExceptionHandler::handle(function () use ($id) {
            return $this->repository->findById($id, ["property"]);
        });
    }

    public function storePropertySetup(Request $request): ?PropertySetup
    {
        return ExceptionHandler::handle(function () use ($request) {
            $item = $this->repository->create([
                'enable_area'          => $request->boolean('enableArea'),
                'enable_block'         => $request->boolean('enableBlock'),
                'enable_unit'          => $request->boolean('enableunit'),
                'enable_address_info'  => $request->boolean('enable_address_info'),
                'enable_contact_info'  => $request->boolean('enable_contact_info'),
                'enable_gmaps'         => $request->boolean('enable_gmaps'),
                'img_video'            => $request->boolean('img-video'),
                'property_type'        => $request->boolean('propertyType'),
            ]);

            return $this->getPropertySetupById($item->id);
        });
    }
}
