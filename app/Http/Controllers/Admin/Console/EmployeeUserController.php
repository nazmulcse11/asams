<?php

namespace App\Http\Controllers\Admin\Console;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Console\User\EmployeeStoreRequest;
use App\Http\Requests\Admin\Console\User\EmployeeUpdateRequest;
use App\Models\Employee;
use App\Services\Contracts\EmployeeServiceInterface;

class EmployeeUserController extends Controller
{
    public function __construct(
        protected EmployeeServiceInterface $employeeService
    )
    {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.console.users.employee.index', [
            "items" => $this->employeeService->getAllEmployees()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.console.users.employee.form", [
            'user' => null,
            'formAction' => route("admin.console.user.employee.store"),
            'formMethod' => 'POST',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeStoreRequest $request)
    {
        $item = $this->employeeService->storeEmployee($request->validated());

        if (!$item) {
            return redirect()->route("admin.console.user.employee.create")
                ->withError("Employee store failed");
        }

        return redirect()->route("admin.console.user.employee.index")
            ->withSuccess("Employee created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view("admin.console.users.employee.show", [
            "item" => $this->employeeService->getEmployeeById($employee->id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view("admin.console.users.employee.form", [
            'user' => $this->employeeService->getEmployeeById($employee->id),
            'formAction' => route("admin.console.user.employee.update", $employee->id),
            'formMethod' => 'PUT',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeeUpdateRequest $request, Employee $employee)
    {
        $item = $this->employeeService->updateEmployee($this->employeeService->getEmployeeById($employee->id), $request->all());

        if (!$item) {
            return redirect()
                ->route("admin.console.user.employee.edit", $employee->id)
                ->withError("Employee update failed");
        }

        return redirect()
            ->route("admin.console.user.employee.edit", $employee->id)
            ->withSuccess("Employee updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $item = $this->employeeService->deleteEmployee($employee);

        if (!$item) {
            return redirect()
                ->route("admin.console.user.employee.index")
                ->withError("Employee delete failed");
        }

        return redirect()
            ->route("admin.console.user.employee.index")
            ->withSuccess("Employee deleted successfully");
    }
}
