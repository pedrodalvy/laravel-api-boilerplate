<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

use function now;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('password'),
            'email_verified_at' => null,
        ];
    }

    public function defaultAdmin(): UserFactory
    {
        return $this->state(function () {
            return [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'email_verified_at' => now(),
            ];
        });
    }
}
