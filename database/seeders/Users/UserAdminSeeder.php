<?php

namespace Database\Seeders\Users;

use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Database\Seeder;

class UserAdminSeeder extends Seeder
{
    public function run(): void
    {
        try {
            User::factory()->defaultAdmin()->createOne();
        } catch (QueryException $exception) {
            $constraintSqlCode = '23000';

            $exception->getCode() === $constraintSqlCode
                ? $this->command->error('Admin user already exists.')
                : throw $exception;
        }
    }
}
