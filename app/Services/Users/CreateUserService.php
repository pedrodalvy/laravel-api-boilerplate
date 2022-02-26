<?php

namespace App\Services\Users;

use App\Models\User;

class CreateUserService
{
    public function execute($userData): User
    {
        return User::create($userData);
    }
}
