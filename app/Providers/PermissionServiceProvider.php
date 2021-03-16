<?php

namespace App\Providers;

use App\Models\Permission;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
class PermissionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Permission::all()->map(function($permission){
            Gate::define($permission->name, function ($user) use ($permission){
                return $user->hasPermission($permission);
            });
        });
    }
}
