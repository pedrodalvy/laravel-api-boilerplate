<?php

namespace Database\Seeders;

use Database\Seeders\Users\UserAdminSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserAdminSeeder::class,
        ]);
    }
}
