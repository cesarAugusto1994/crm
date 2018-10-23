<?php

namespace App\Policies;

use App\User;
use App\App\Models\Template;
use Illuminate\Auth\Access\HandlesAuthorization;

class TemplatesPolicy
{
    use HandlesAuthorization;

    public function index(User $user)
    {
        return $user->isUser() || $user->isSuperuser();
    }

    /**
     * Determine whether the user can view the template.
     *
     * @param  \App\User  $user
     * @param  \App\App\Models\Template  $template
     * @return mixed
     */
    public function view(User $user, Template $template)
    {
        //
    }

    /**
     * Determine whether the user can create templates.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the template.
     *
     * @param  \App\User  $user
     * @param  \App\App\Models\Template  $template
     * @return mixed
     */
    public function update(User $user, Template $template)
    {
        //
    }

    /**
     * Determine whether the user can delete the template.
     *
     * @param  \App\User  $user
     * @param  \App\App\Models\Template  $template
     * @return mixed
     */
    public function delete(User $user, Template $template)
    {
        //
    }
}
