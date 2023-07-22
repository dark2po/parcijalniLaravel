<?php

namespace App\Http\Controllers;

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
        return Role::all();
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
    public function store(Request $request)
    {
        $request->validate([
            'roleName' => ['required', 'string', 'max:255', 'min:2', 'unique:'.Role::class],
        ]);

        Role::create([
            'roleName' => $request->input('roleName'),
        ]);

        return redirect()->route('role.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return $role;
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
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'roleName' => ['required', 'string', 'max:255', 'min:2', Rule::unique(Role::class)->ignore($role->id)],
        ]);
        
        $role->roleName = $request->input('roleName');
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
