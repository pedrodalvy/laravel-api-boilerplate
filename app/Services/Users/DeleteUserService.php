<?php

namespace App\Services\Users;

use App\Models\User;

class DeleteUserService
{
    public function execute(int $userId): User
    {
        $user = User::findOrFail($userId);
        $user->delete();

        return $user;
    }
}
