<?php

namespace App\Services\Users;

use App\Models\User;

class UpdateUserService
{
    public function execute($userId, $userData): User
    {
        $user = User::findOrFail($userId);
        $user->update($userData);

        return $user;
    }
}
