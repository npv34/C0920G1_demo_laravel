<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
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
        Gate::define('create-user', function ($user){
            foreach ($user->roles as $role) {
                if ($role->id === 1) {
                    return true;
                }
            }
            return false;
        });

        // quyen xem danh user
        Gate::define('view-list-user', function ($user){
            foreach ($user->roles as $role) {
                if ($role->id === 1 || $role->id == 2) {
                    return true;
                }
            }
            return false;
        });
    }
}
