<?php

namespace App\Services\Auth;

use Symfony\Component\HttpKernel\Exception\HttpException;

class LoginService
{
    public function execute(array $credentials): array
    {
        if (! $token = auth()->attempt($credentials)) {
            throw new HttpException(401, 'Invalid credentials');
        }

        return [
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory('')->getTTL() * 60
        ];
    }
}
