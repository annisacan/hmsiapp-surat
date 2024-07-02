<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Passport::hashClientSecrets();
        
        try {
            // Define gates for all roles
            $roles = Role::all();
            foreach ($roles as $role) {
                Gate::define($role->name, function($user) use ($role) {
                    return $user->hasRole($role->name);
                });
            }

            // Define gates for all permissions
            $permissions = Permission::all();
            foreach ($permissions as $permission) {
                Gate::define($permission->name, function($user) use ($permission) {
                    return $user->hasPermission($permission->name);
                });
            }
        } catch (\Exception $e) {
            Log::error('Error setting up Gates: ' . $e->getMessage());
        }

        // Log the roles and permissions of the authenticated user (for debugging purposes)
        if ($user = Auth::user()) {
            Log::info('User Roles: ' . json_encode($user->roles->pluck('name')->toArray()));
            Log::info('User Permissions: ' . json_encode($user->permissions->pluck('name')->toArray()));
        }
    }
}
