<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\Auth\JwtLoginResource;
use App\Http\Resources\Auth\LogoutResource;
use App\Services\Auth\LoginService;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(LoginService $loginService, LoginRequest $request): JwtLoginResource
    {
        $credentials = $request->validated();
        $token = $loginService->execute($credentials);

        return JwtLoginResource::make($token);
    }

    public function logout(): LogoutResource
    {
        Auth::logout();

        return LogoutResource::make([]);
    }
}
