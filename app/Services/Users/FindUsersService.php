<?php

namespace App\Services\Users;

use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;

class FindUsersService
{
    public function execute(): LengthAwarePaginator
    {
        return User::paginate();
    }
}
