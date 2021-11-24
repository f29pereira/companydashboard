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
         * @param \App\Models\Users\User $user
         * @return \Illuminate\Auth\Access\Response
         */
        Gate::define('is_admin', function (User $user){
            return $user->user_role_id === 1
                ? Response::allow()
                : Response::deny('Ação disponível apenas para Administrador do sistema.');
        });

        /**
         *  Determines if the user is an Department Responsible
         * @param \App\Models\Users\User $user
         *  @return \Illuminate\Auth\Access\Response
         */
        Gate::define('is_respDepartment', function (User $user){
            return $user->user_role_id === 3
                ? Response::allow()
                : Response::deny('Ação disponível apenas para Responsável do Departamento.');
        });

        /**
         * Determines if the user is an Collaborator
         * @param \App\Models\Users\User $user
         *  @return \Illuminate\Auth\Access\Response
         */
        Gate::define('is_user', function (User $user){
            return $user->user_role_id === 1 || $user->user_role_id === 2 || $user->user_role_id === 3 || $user->user_role_id === 4
                ? Response::allow()
                : Response::deny('Ação disponível apenas para Colaborador.');
        });
    }
}
