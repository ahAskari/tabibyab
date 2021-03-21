<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('roles.list', ['roles' => $roles]);
    }
    public function store(Request $request)
    {
        $this->validateForm($request);
        Role::create($request->only('name', 'persian_name'));
        return back()->with('success', true);
    }
    protected function validateForm($request)
    {
        return $request->validate([
            'name' => ['required'],
            'persian_name' => ['required'],
        ]);
    }
    public function edit(Role $role_id)
    {
        $permissions = Permission::all();
        $role_id->load('permissions');
        return view('roles.edit', ['permissions' => $permissions, 'role_id' => $role_id]);
    }
    public function update(Request $request, Role $role_id)
    {
        $this->validateForm($request);
        $role_id->update($request->only('name', 'presian_name'));
        $role_id->refreshPermission($request->permissions);
        return back()->with('success', true);
    }
}
