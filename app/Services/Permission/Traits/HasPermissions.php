<?php

namespace App\Services\Permission\Traits;

use App\Models\Permission;
use Illuminate\Support\Arr;

trait HasPermissions
{
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
    public function givePermissionsTo(...$permissions)
    {
        $permissions = $this->getAllPermissions($permissions);
        
        if($permissions->isEmpty()) 
        return $this;
        
        dd($this->permissions()->syncWithoutDetaching($permissions));   
    }
    public function getAllPermissions(array $permissions)
    {
        return Permission::whereIn('name', Arr::flatten($permissions))->get();
    }
}
