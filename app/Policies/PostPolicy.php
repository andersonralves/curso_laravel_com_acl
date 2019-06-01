<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\{ User, Post };


class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function updatePost(User $user, Post $post)
    {
        return $user->id == $post->user_id;
    }
}
