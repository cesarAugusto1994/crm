<?php

namespace App\Policies;

use App\User;
use App\Models\Empresa;
use Illuminate\Auth\Access\HandlesAuthorization;

class EmpresasPolicy
{
    use HandlesAuthorization;

    public function index(User $user)
     {
         return $user->isAdmin();
     }

    /**
     * Determine whether the user can view the empresas.
     *
     * @param  \App\User  $user
     * @param  \App\Empresas  $empresas
     * @return mixed
     */
    public function view(User $user, Empresa $empresas)
    {
        //
    }

    /**
     * Determine whether the user can create empresas.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the empresas.
     *
     * @param  \App\User  $user
     * @param  \App\Empresas  $empresas
     * @return mixed
     */
    public function update(User $user, Empresa $empresas)
    {
        //
    }

    /**
     * Determine whether the user can delete the empresas.
     *
     * @param  \App\User  $user
     * @param  \App\Empresas  $empresas
     * @return mixed
     */
    public function delete(User $user, Empresa $empresas)
    {
        //
    }
}
