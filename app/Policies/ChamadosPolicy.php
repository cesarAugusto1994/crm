<?php

namespace App\Policies;

use App\User;
use App\Models\Chamados;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChamadosPolicy
{
    use HandlesAuthorization;


    public function index(User $user)
     {
         return (boolean)$user->isUser() || $user->isSuperuser();;
     }
    /**
     * Determine whether the user can view the chamados.
     *
     * @param  \App\User  $user
     * @param  \App\Chamados  $chamados
     * @return mixed
     */
    public function view(User $user, Chamados $chamados)
    {
        return (boolean)$user->isUser() || $user->isSuperuser();;
    }

    /**
     * Determine whether the user can create chamados.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the chamados.
     *
     * @param  \App\User  $user
     * @param  \App\Chamados  $chamados
     * @return mixed
     */
    public function update(User $user, Chamados $chamados)
    {
        //
    }

    /**
     * Determine whether the user can delete the chamados.
     *
     * @param  \App\User  $user
     * @param  \App\Chamados  $chamados
     * @return mixed
     */
    public function delete(User $user, Chamados $chamados)
    {
        //
    }
}
