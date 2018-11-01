<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MaillingPolicy
{
    use HandlesAuthorization;

    public function index(User $user)
    {
        return $user->isUser() || $user->isSuperuser();
    }
}
