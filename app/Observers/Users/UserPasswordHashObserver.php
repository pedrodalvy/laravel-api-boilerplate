<?php

namespace App\Observers\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserPasswordHashObserver
{
    public function saving(User $user): void
    {
        $password = $user->password;

        if(Hash::needsRehash($password)){
            $password = Hash::make($password);
        }

        $user->password = $password;
    }
}
