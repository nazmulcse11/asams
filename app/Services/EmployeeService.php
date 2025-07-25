<?php

namespace App\Services;

use App\Models\Employee;
use App\Repositories\Contracts\EmployeeRepositoryInterface;
use App\Services\Contracts\EmployeeServiceInterface;
use \Illuminate\Pagination\LengthAwarePaginator;
use App\Utils\ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EmployeeService implements EmployeeServiceInterface
{
    protected EmployeeRepositoryInterface $repository;
    protected MediaService $mediaService;

    public function __construct(EmployeeRepositoryInterface $repository, MediaService $mediaService)
    {
        $this->repository = $repository;
        $this->mediaService = $mediaService;
    }

    public function getAllEmployees(): LengthAwarePaginator
    {
        return ExceptionHandler::handle(function () {
            return $this->repository->withRelationships(['profile', 'addresses']);
        });
    }

    public function getDataTable(Request $request): array
    {
        return ExceptionHandler::handle(function() use ($request) {
            $draw = $request->input('draw');

            $employees = $this->repository->getDataTableData($request);

            $this->columns($employees);

            return [
                "draw" => intval($draw),                   // Draw parameter for DataTables sequence validation
                "recordsTotal" => $this->repository->count(),        // Total records in the database (without filters)
                "recordsFiltered" => $employees->total(),  // Total records after filtering
                "data" => $employees->items(),             // Data array for the current page
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

    public function getEmployeeById(mixed $id): ?object
    {
        return ExceptionHandler::handle(function () use ($id) {
            return $this->repository->findById($id);
        });
    }

    public function storeEmployee(array $data): ?object
    {
        return ExceptionHandler::handle(function () use ($data) {
            $employee = $this->repository->create($data);

            $employee->propertyLinks()->createMany(
                collect($data['properties'])->map(fn($id) => ['property_id' => $id])->all()
            );

            if (isset($data['picture'])) {
                $this->mediaService->uploadMedia($employee->profile, $data['picture'], "picture");
            }

            if (isset($data['cover'])) {
                $this->mediaService->uploadMedia($employee->profile, $data['cover'], "cover");
            }

            return $employee;
        }, null, true);
    }

    public function updateEmployee(Employee $Employee, array $data): object
    {
        return ExceptionHandler::handle(function () use ($Employee, $data) {
            $employee =  $this->repository->update($Employee, $data);

            $employee->propertyLinks()->delete();

            $employee->propertyLinks()->createMany(
                collect($data['properties'])->map(fn($id) => ['property_id' => $id])->all()
            );

            if (isset($data['picture'])) {
                $this->mediaService->updateMedia($employee->profile, $data['picture'], "picture");
            }

            if (isset($data['cover'])) {
                $this->mediaService->updateMedia($employee->profile, $data['cover'], "cover");
            }

            return $employee;
        }, $Employee, true);
    }

    public function deleteEmployee(Employee $Employee): bool
    {
        return ExceptionHandler::handle(function () use ($Employee) {
            if( $Employee?->profile?->picture ) {
                $this->mediaService->deleteMedia($Employee->profile, 'picture');
            }
            if( $Employee?->profile?->cover ) {
                $this->mediaService->deleteMedia($Employee->profile, 'cover');
            }
            return $this->repository->delete($Employee->id);
        }, false, true);
    }

    public function deleteBulkEmployees(array $ids): bool
    {
        return ExceptionHandler::handle(function() use ($ids) {
            return $this->repository->deleteBulk($ids);
        }, false, true);
    }
}
