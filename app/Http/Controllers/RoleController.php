<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleStoreRequest;
use App\Http\Requests\RoleUpdateRequest;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('role.index', ['roles' => Role::all()]);
        // return Role::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleStoreRequest $request)
    {

        Role::create([
            'roleName' => $request->validated('roleName'),
        ]);

        return redirect()->route('role.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return view('role.show', ['role' => $role]);
        // return $role;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        return view('role.editDelete', [
            'roleName' => $role->roleName, 
            'id' => $role->id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoleUpdateRequest $request, Role $role)
    {
        
        $role->roleName = $request->validated('roleName');
        $role->save();

        return redirect()->route('role.show', $role);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $role)
    {
        Role::destroy($role);

        return redirect()->route('role.index');
    }
}
