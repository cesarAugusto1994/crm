<?php

namespace App\Policies;

use App\User;
use App\Models\Midias;
use Illuminate\Auth\Access\HandlesAuthorization;

class MidiasPolicy
{
    use HandlesAuthorization;

    public function index(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can view the midias.
     *
     * @param  \App\User  $user
     * @param  \App\App\Midias  $midias
     * @return mixed
     */
    public function view(User $user, Midias $midias)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can create midias.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the midias.
     *
     * @param  \App\User  $user
     * @param  \App\App\Midias  $midias
     * @return mixed
     */
    public function update(User $user, Midias $midias)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the midias.
     *
     * @param  \App\User  $user
     * @param  \App\App\Midias  $midias
     * @return mixed
     */
    public function delete(User $user, Midias $midias)
    {
        return $user->isAdmin();
    }
}
