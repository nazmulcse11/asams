<?php

namespace App\Services;

use App\Models\Property;
use App\Repositories\Contracts\FloorRepositoryInterface;
use App\Repositories\Contracts\PropertyRepositoryInterface;
use App\Services\Contracts\AdministratorServiceInterface;
use App\Services\Contracts\PropertyServiceInterface;
use App\Utils\ExceptionHandler;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PropertyService implements Contracts\PropertyServiceInterface
{

    public function __construct(
        protected FloorRepositoryInterface $floorRepository,
        protected PropertyRepositoryInterface $repository,
        protected MediaService $mediaService,
        protected AdministratorServiceInterface $administratorService
    )
    {
    }

    public function getAllProperties(): LengthAwarePaginator|Collection
    {
        return ExceptionHandler::handle(function (){
            return $this->repository->all();
        });
    }

    public function getDataTable(Request $request): array
    {
        return ExceptionHandler::handle(function() use ($request) {
            $draw = $request->input('draw');

            $agents = $this->repository->getDataTableData($request);

            return [
                "draw" => intval($draw),                   // Draw parameter for DataTables sequence validation
                "recordsTotal" => $this->repository->count(),        // Total records in the database (without filters)
                "recordsFiltered" => $agents->total(),  // Total records after filtering
                "data" => $agents->items(),             // Data array for the current page
            ];
        }, []);
    }

    public function getPropertyById(mixed $id): ?Property
    {
        return ExceptionHandler::handle(function () use ($id) {
            return $this->repository->findById($id, [
                'addresses',
                'setup',
                'floors',
                'floors.blocks',
                'floors.blocks.shops',
                "floors.blocks.shops.agentShops",
                "floors.blocks.shops.agentShops.agent",
                "floors.blocks.shops.agentShops.agent.profile"
            ]);
        });
    }

    public function storeProperty(array $data): ?Property
    {
        return ExceptionHandler::handle(function () use ($data) {
            $property =  $this->repository->create($data);

            $property->addresses()->create(array_filter([
                'type_id'        => $data['type_id'] ?? 2,
                'address_line1'  => $data['address_line1'] ?? null,
                'address_line2'  => $data['address_line2'] ?? null,
                'city_id'        => $data['city_id'] ?? null,
                'state_id'       => $data['state_id'] ?? null,
                'country_id'     => $data['country_id'] ?? null,
                'zip_code'       => $data['zip_code'] ?? null,
                'is_primary'     => $data['is_primary'] ?? true,
            ], fn($value) => !is_null($value)));

            if (isset($data['images'])) {
                $this->mediaService->uploadMedia($property, $data['images'], "picture");
            }
            return $property;
        }, null, true);
    }

    public function updateProperty(Property $property, array $data): Property
    {
        return ExceptionHandler::handle(function () use ($property, $data) {
            if (isset($data['images'])) {
                $this->mediaService->updateMedia($property, $data['images'], "picture");
            }

            $property->addresses()->delete();
            $property->addresses()->create(array_filter([
                'type_id'        => $data['type_id'] ?? 2,
                'address_line1'  => $data['address_line1'] ?? null,
                'address_line2'  => $data['address_line2'] ?? null,
                'city_id'        => $data['city_id'] ?? null,
                'state_id'       => $data['state_id'] ?? null,
                'country_id'     => $data['country_id'] ?? null,
                'zip_code'       => $data['zip_code'] ?? null,
                'is_primary'     => $data['is_primary'] ?? true,
            ], fn($value) => !is_null($value)));

            return $this->repository->update($property->id, $data);
        }, $property, true);
    }

    public function deleteProperty(Property $property, $password): bool
    {
        return ExceptionHandler::handle(function () use ($property, $password) {
            if($this->administratorService->verifyPassword($password)) {
                if( $property->picture ) {
                    $this->mediaService->deleteMedia($property, 'picture');
                }
                return $this->repository->delete($property->id);
            }
            return false;
        }, false, true);
    }

    public function deleteBulkProperties(array $ids): bool
    {
        return ExceptionHandler::handle(function() use ($ids) {
            return $this->repository->deleteBulk($ids);
        }, false, true);
    }
}
