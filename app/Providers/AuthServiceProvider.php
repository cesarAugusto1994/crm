<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\{Empresa, Clientes};
use App\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        Chamados::class => 'App\Policies\ChamadosPolicy',
        Empresa::class => 'App\Policies\EmpresasPolicy',
        Clientes::class => 'App\Policies\ClientesPolicy',
        User::class => 'App\Policies\UsersPolicy',
    ];



    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::resource('manage-chamados', 'App\Policies\ChamadosPolicy');
        Gate::define('manage-chamados.index', 'App\Policies\ChamadosPolicy@index');

        Gate::resource('manage-empresas', 'App\Policies\EmpresasPolicy');
        Gate::define('manage-empresas.index', 'App\Policies\EmpresasPolicy@index');

        Gate::resource('manage-clientes', 'App\Policies\ClientesPolicy');
        Gate::define('manage-clientes.index', 'App\Policies\ClientesPolicy@index');

        Gate::resource('manage-users', 'App\Policies\UsersPolicy');
        Gate::define('manage-users.index', 'App\Policies\UsersPolicy@index');
    }
}
