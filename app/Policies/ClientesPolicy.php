<?php

namespace App\Policies;

use App\User;
use App\Models\Clientes;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClientesPolicy
{
    use HandlesAuthorization;

    public function index(User $user)
    {
        return (boolean)$user->isUser();
    }

    /**
     * Determine whether the user can view the clientes.
     *
     * @param  \App\User  $user
     * @param  \App\Clientes  $clientes
     * @return mixed
     */
    public function view(User $user, Clientes $clientes)
    {
        return (boolean)$user->isUser();
    }

    /**
     * Determine whether the user can create clientes.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the clientes.
     *
     * @param  \App\User  $user
     * @param  \App\Clientes  $clientes
     * @return mixed
     */
    public function update(User $user, Clientes $clientes)
    {
        //
    }

    /**
     * Determine whether the user can delete the clientes.
     *
     * @param  \App\User  $user
     * @param  \App\Clientes  $clientes
     * @return mixed
     */
    public function delete(User $user, Clientes $clientes)
    {
        //
    }
}
