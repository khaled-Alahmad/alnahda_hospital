<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('isAdmin', function ($user) {
            return $user->role->role === 'admin';
        });

        Gate::define('isDoctor', function ($user) {
            return $user->role->role === 'doctor';
        });

        Gate::define('isPatient', function ($user) {
            return $user->role->role === 'patient';
        });
    }
}
