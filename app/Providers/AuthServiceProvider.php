<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
// use Laravel\Passport\Passport;
use Laravel\Passport\HasApiTokens;

class AuthServiceProvider extends ServiceProvider
{
    use HasApiTokens;

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Passport::routes();

        // Passport::tokensCan([
        //     'role-u' => 'User Role Access',
        // ]);
    }
}
