<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\Auth\JwtLoginResource;
use App\Services\Auth\LoginService;

class AuthController
{
    public function login(LoginService $loginService, LoginRequest $request): JwtLoginResource
    {
        $credentials = $request->validated();
        $token = $loginService->execute($credentials);

        return JwtLoginResource::make($token);
    }
}
