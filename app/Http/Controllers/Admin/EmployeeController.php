<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Employee\BulkDestroyRequest;
use App\Http\Requests\Admin\Employee\StoreRequest;
use App\Http\Requests\Admin\Employee\UpdateRequest;
use App\Models\Employee;
use App\Services\Contracts\EmployeeServiceInterface;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected EmployeeServiceInterface $service;


    public function __construct(EmployeeServiceInterface $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('admin.employee.index', [
            'items' => getCurrentProperty()?->employees
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.employee.create', [
            'pageTitle' => 'New Employee',
            'breadcrumbItems' => [
                ['name' => 'Employees', 'url' => route('admin.employee.index'), 'active' => false],
                ['name' => 'New Employee', 'url' => route('admin.employee.create'), 'active' => true]
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $employee = $this->service->storeEmployee($request->validated());

        if( !$employee ) {
            return redirect()
                ->route("admin.employee.create")
                ->withErrors("Failed to create the Employee. Please try again.")
                ->withInput();
        }

        return redirect()
            ->route("admin.employee.edit", $employee)
            ->withSuccess("Employee created successfully!")
            ->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view('admin.employee.show', [
            'item' => $this->service->getEmployeeById($employee->id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('admin.employee.edit', [
            'employee' => $employee,
            'pageTitle' => 'Edit Employee',
            'breadcrumbItems' => [
                ['name' => 'Employees', 'url' => route('admin.employee.index'), 'active' => false],
                ['name' => 'Edit Employee', 'url' => route('admin.employee.edit', $employee), 'active' => true]
            ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Employee $employee)
    {
        $employee = $this->service->updateEmployee($employee, $request->validated());

        if( !$employee ) {
            return redirect()
                ->route("admin.employee.edit", $employee)
                ->withErrors("Failed to update the Employee. Please try again.")
                ->withInput();
        }

        return redirect()
            ->route("admin.employee.edit", $employee)
            ->withSuccess("Employee updated successfully!")
            ->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $status = $this->service->deleteEmployee($employee);

        if( !$status ) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete the employee. Please try again.'
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Employee deleted successfully!'
        ]);
    }

    public function destroyBulk(BulkDestroyRequest $request)
    {
        $status = $this->service->deleteBulkEmployees($request->ids);

        if( !$status ) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete the employees. Please try again.'
            ]);
        }


        return response()->json([
            'success' => true,
            'message' => 'Employees deleted successfully!'
        ]);
    }
}
