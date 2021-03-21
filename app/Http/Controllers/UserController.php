<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;

use function Ramsey\Uuid\v1;
use Illuminate\Http\Request;

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
        return back()->with('success', true);
    }
}
