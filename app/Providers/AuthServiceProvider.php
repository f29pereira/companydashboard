<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;
use App\Models\Users\User;

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

        /**
         * Determines if the user is an Administrator
         *
         * @param \App\Models\Users\User            $user
         * @return \Illuminate\Auth\Access\Response
         */
        Gate::define('is_admin', function (User $user){
            return $user->user_role_id === 1
                ? Response::allow()
                : Response::deny(__('auth.admin'));
        });

        /**
         * Determines if the user is an Administrator or a Department Manager/Collaborator from the "Quality" department
         * @param \App\Models\Users\User            $user
         * @return \Illuminate\Auth\Access\Response
         */
        Gate::define('is_user_nc', function   (User $user){
             return $user->user_role_id === 1
             || ($user->user_role_id === 2 && $user->department_id === 4)
             || ($user->user_role_id === 3 && $user->department_id === 4)
                ? Response::allow()
                : Response::deny(__('auth.is_user_nc'));
        });

        /**
         * Determines if the user is an Department Manager
         * @param \App\Models\Users\User            $user
         * @return \Illuminate\Auth\Access\Response
         */
        Gate::define('is_departmentResp', function (User $user){
            return $user->user_role_id === 2
                ? Response::allow()
                : Response::deny(__('auth.departmentResp'));
        });

        /**
         * Determines if the user is an company collaborator
         * @param \App\Models\Users\User            $user
         * @return \Illuminate\Auth\Access\Response
         */
        Gate::define('is_user_company', function (User $user){
            return $user->user_role_id === 2 || $user->user_role_id === 3
                ? Response::allow()
                : Response::deny(__('auth.user_company'));
        });

        /**
         * Determines if the user is an registered user
         * @param \App\Models\Users\User            $user
         * @return \Illuminate\Auth\Access\Response
         */
        Gate::define('is_user', function (User $user){
            return $user->user_role_id === 1 || $user->user_role_id === 2 || $user->user_role_id === 3
                ? Response::allow()
                : Response::deny(__('auth.user'));
        });
    }
}
