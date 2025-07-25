<?php

namespace App\Services;

use App\Models\Employee;
use App\Models\User;
use App\Repositories\Contracts\AdministratorRepositoryInterface;
use App\Services\Contracts\AdministratorServiceInterface;
use App\Utils\ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdministratorService implements Contracts\AdministratorServiceInterface
{
    protected AdministratorRepositoryInterface $repository;
    protected MediaService $mediaService;

    public function __construct(AdministratorRepositoryInterface $repository, MediaService $mediaService)
    {
        $this->repository = $repository;
        $this->mediaService = $mediaService;
    }

    public function getAllAdministrators(): LengthAwarePaginator
    {
        return ExceptionHandler::handle(function () {
            return $this->repository->withRelationships(['profile', 'addresses']);
        });
    }

    public function getDataTable(Request $request): array
    {
        return ExceptionHandler::handle(function() use ($request) {
            $draw = $request->input('draw');

            $administrators = $this->repository->getDataTableData($request);

            $this->columns($administrators);

            return [
                "draw" => intval($draw),                   // Draw parameter for DataTables sequence validation
                "recordsTotal" => $this->repository->count(),        // Total records in the database (without filters)
                "recordsFiltered" => $administrators->total(),  // Total records after filtering
                "data" => $administrators->items(),             // Data array for the current page
            ];
        }, []);
    }

    protected function columns($companies): void
    {
        $companies->getCollection()->transform(function ($company) {
            $company->description = Str::limit($company->description, 50); // Limit description to 100 characters
            return $company;
        });
    }

    public function getAdministratorById(mixed $id): ?User
    {
        return ExceptionHandler::handle(function () use ($id) {
            return $this->repository->findById($id);
        });
    }

    public function storeAdministrator(array $data): ?User
    {
        return ExceptionHandler::handle(function () use ($data) {
            $administrator = $this->repository->create($data);

            $administrator->propertyLinks()->createMany(
                collect($data['properties'])->map(fn($id) => ['property_id' => $id])->all()
            );

            if (isset($data['picture'])) {
                $this->mediaService->uploadMedia($administrator->profile, $data['picture'], "picture");
            }

            if (isset($data['cover'])) {
                $this->mediaService->uploadMedia($administrator->profile, $data['cover'], "cover");
            }

            return $administrator;
        }, null, true);
    }

    public function updateAdministrator(User $administrator, array $data): User
    {
        return ExceptionHandler::handle(function () use ($administrator, $data) {
            $administrator = $this->repository->update($administrator, $data);

            $administrator->propertyLinks()->delete();

            $administrator->propertyLinks()->createMany(
                collect($data['properties'])->map(fn($id) => ['property_id' => $id])->all()
            );

            if (isset($data['picture'])) {
                $this->mediaService->updateMedia($administrator->profile, $data['picture'], "picture");
            }

            if (isset($data['cover'])) {
                $this->mediaService->updateMedia($administrator->profile, $data['cover'], "cover");
            }

            return $administrator;
        }, $administrator, true);
    }

    public function deleteAdministrator(User $administrator): bool
    {
        return ExceptionHandler::handle(function () use ($administrator) {
            if( $administrator?->profile?->picture ) {
                $this->mediaService->deleteMedia($administrator->profile, 'picture');
            }
            if( $administrator?->profile?->cover ) {
                $this->mediaService->deleteMedia($administrator->profile, 'cover');
            }
            return $this->repository->delete($administrator->id);
        }, false, true);
    }

    public function deleteBulkAdministrators(array $ids): bool
    {
        return ExceptionHandler::handle(function() use ($ids) {
            return $this->repository->deleteBulk($ids);
        }, false, true);
    }

    public function verifyPassword(string $password): bool
    {
        return ExceptionHandler::handle(function () use ($password) {
            $user = auth()->user();

            if (Hash::check($password, $user->password)) {
                return true;
            }
            return false;
        }, false);
    }
}
