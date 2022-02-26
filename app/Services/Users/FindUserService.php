<?php

namespace App\Services\Users;

use App\Models\User;

class FindUserService
{
    public function execute(int $userId): User
    {
        return User::findOrFail($userId);
    }
}
