<?php

namespace App\Http\Controllers\Admin\Console;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AdminRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.console.roles.admin.index', [
            "roles" => arrayToObject([
                [
                    "id" => 1,
                    "name" => "Admin",
                    "created_at" => Carbon::parse("2023-04-24 12:00:00")
                ],
                [
                    "id" => 2,
                    "name" => "User",
                    "created_at" => Carbon::parse("2023-04-24 12:00:00")
                ]
            ])
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
