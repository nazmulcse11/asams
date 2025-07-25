<?php

namespace App\Http\Controllers\Admin\Console;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Console\User\AdminStoreRequest;
use App\Http\Requests\Admin\Console\User\AdminUpdateRequest;
use App\Models\User;
use App\Services\Contracts\AdministratorServiceInterface;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{

    public function __construct(
        protected AdministratorServiceInterface $administratorService
    )
    {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.console.users.admin.index', [
            "items" => $this->administratorService->getAllAdministrators()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.console.users.admin.form", [
            'user' => null,
            'formAction' => route("admin.console.user.admin.store"),
            'formMethod' => 'POST',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminStoreRequest $request)
    {
        $item = $this->administratorService->storeAdministrator($request->validated());

        if(!$item) {
            return redirect()
                ->route("admin.console.user.admin.create")
                ->withError("Admin store failed");
        }
        return redirect()
            ->route("admin.console.user.admin.index")
            ->withSuccess("Admin created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view("admin.console.users.admin.show", [
            "item" => $this->administratorService->getAdministratorById($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view("admin.console.users.admin.form", [
            'user' => $this->administratorService->getAdministratorById($id),
            'formAction' => route("admin.console.user.admin.update", $id),
            'formMethod' => 'PUT',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdminUpdateRequest $request, string $id)
    {
        $item = $this->administratorService->updateAdministrator($this->administratorService->getAdministratorById($id), $request->validated());

        if(!$item) {
            return redirect()
                ->route("admin.console.user.admin.edit", $id)
                ->withSuccess("Admin update failed");
        }

        return redirect()
            ->route("admin.console.user.admin.edit", $id)
            ->withSuccess("Admin updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $admin)
    {
        if($this->administratorService->deleteAdministrator($admin))
        {
            return redirect()
                ->route("admin.console.user.admin.index")
                ->withSuccess("Admin deleted successfully");
        } else {
            return redirect()
                ->route("admin.console.user.admin.index")
                ->withError("Admin delete failed");
        }
    }
}
