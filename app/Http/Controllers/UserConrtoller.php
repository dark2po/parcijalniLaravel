<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rules\Password;

class UserConrtoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {

        return view('user.index', ['users' => User::all()]);
        // return User::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::pluck('roleName', 'id')->toArray();
        // dd(['roles' => $roles], compact('roles'));
        // foreach ($roles as $id => $role) {
        //     echo $id, ' ', $role, "<br>";
        // }
        // dd($roles, compact('roles'));
        return view('user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {

        User::create([
            'name' => $request->validated('name'),
            'email' => $request->validated('email'),
            'password' => Hash::make($request->validated('password')),
            'role_id' => $request->validated('role_id'),
        ]);

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('user.show', ['user' => $user]);
        // return $user;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::pluck('roleName', 'id')->toArray();
        return view('user.editDelete', [
            'name' => $user->name, 
            'id' => $user->id, 
            'email' => $user->email, 
            'role_id' => $user->role_id, 
            "roles" => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, User $user)
    {

        $user->name = $request->validated('name');
        $user->email = $request->validated('email');
        $user->role_id = $request->validated('role_id');
        
        if ($request->filled('password')) {
            $request->validate([
                'password' => ['required', Password::defaults()],
            ]);
            $user->password = $request->input('password');
        }

        $user->save();

        return redirect()->route('user.show', $user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        User::destroy($user);

        return redirect()->route('user.index');
    }
}
