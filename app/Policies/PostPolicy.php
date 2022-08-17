<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

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
        
    }
    // Это политика доступа
    // функции для проверки политики доступа к марширутам ДОЛЖНЫ ВЕРНУТЬ TRUE ИЛИ FALSE
    public function update(User $user, Post $post) {
        return $post->user->id === $user->id;
    }

    public function destroy(User $user, Post $post) {
        return $this->update($user, $post);
    }
}
