<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use App\Models\Speciality;

use function Ramsey\Uuid\v1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();
        return view('users.list', ['users' => $users]);
    }
    public function edit(User $user)
    {
        $permissions = Permission::all();
        $roles = Role::all();
        $user->load('roles', 'permissions');
        return view('users.edit', ['permissions' => $permissions, 'roles' => $roles, 'user' => $user]);
    }
    public function update(Request $request, User $user)
    {
        // dd($request->all());
        $user->refreshPermission($request->permissions);
        $user->refreshRoles($request->roles);

        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $user->update($request->all());

        return back()->with('success', true);
    }
    public function destroy(User $user, Request $request)
    {
        $user->destroy($request->id);

        return back()->with('success', true);
    }
    public function create()
    {
        return view('users.create');
    }
    // admin
    public function create_user(Request $request)
    {
        User::create([

            'name' => $request['name'],
            'email' => $request['email'],
            // 'is_doctor' => $data['is_doctor'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->route('users.index')
            ->with('success', 'Product created successfully.');

        // User::create($request->all());

    }
}
