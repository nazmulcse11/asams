<?php

namespace App\Repositories;

use App\Filters\EmployeeFilter;
use App\Models\Employee;
use App\Repositories\Contracts\EmployeeRepositoryInterface;
use App\Repositories\Traits\BaseRepositoryTrait;
use App\Repositories\Traits\CacheableRepositoryTrait;
use App\Repositories\Traits\OptionalRepositoryTrait;
use App\Repositories\Traits\SoftDeletesRepositoryTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Propaganistas\LaravelPhone\PhoneNumber;
use Illuminate\Http\Request;

class EmployeeRepository implements EmployeeRepositoryInterface
{
    use OptionalRepositoryTrait, CacheableRepositoryTrait, BaseRepositoryTrait, SoftDeletesRepositoryTrait;

    protected EmployeeFilter $filter;

    public function __construct(EmployeeFilter $filter)
    {
        $this->filter = $filter;
    }

    protected function getModel(): Model
    {
        return new Employee();
    }

    public function getDataTableData(Request $request): LengthAwarePaginator
    {
        $length = (int) $request->input('length', 10);
        $start = (int) $request->input('start', 0);
        $page = max(1, (int) floor($start / $length) + 1); // Ensure valid page number

        $query = $this->getModel()::with(['status'])->select(['id', 'username', 'email', 'phone', 'status_id', 'created_at']);
        $filtered = $this->filter->apply($query, $request);

        // Paginate the query results with order by `id` descending
        // Calculate current page as (start offset / page length) + 1
        return $filtered->orderBy('id', 'desc')->paginate($length, ['*'], 'page', $page);
    }

    public function withRelationships(array $relationships): LengthAwarePaginator
    {
        return $this->getModel()->with($relationships)->latest()->paginate();

    }

    public function findById(int $id): ?Employee
    {
        return $this->findByWithRelationships(['id' => $id], ['profile', 'addresses'])->first();
    }

    public function create(array $attributes): ?Employee
    {
        return $this->saveEmployeeDetails(new Employee(), $attributes);
    }

    public function update(Employee $employee, array $attributes): ?Employee
    {
        return $this->saveEmployeeDetails($employee, $attributes);
    }

    public function deleteBulk(array $ids): bool
    {
        $employees = $this->getModel()->whereIn('id', $ids)->with(['addresses', 'profile'])->get();

        if ($employees->isEmpty()) {
            return false;
        }

        foreach ($employees as $employee) {
            $employee->addresses()->delete();
            $employee->profile()->delete();
            $employee->delete();
        }

        return true;
    }

    protected function saveEmployeeDetails(Employee $employee, array $attributes): Employee
    {
        // Save basic employee data (create or update)
        $employee->fill([
            "username" => $employee->exists ? $employee->username : $attributes['username'],
            'email' => $attributes['email'],
            'phone' => (string) $attributes['phone'] ?? null,
            'status_id' => $attributes['status_id'],
            "password" => $employee->exists ? $employee->password : bcrypt($attributes['password'])
        ])->save();


        // Save profile (either create or update)
        $employee->profile()->updateOrCreate([], $attributes);

        // Sync addresses (delete old and create new)
        $employee->addresses()->updateOrCreate([], $attributes);

        return $employee;
    }
}
