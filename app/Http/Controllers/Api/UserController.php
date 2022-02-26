<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\CreateUserRequest;
use App\Http\Requests\Users\UpdateUserRequest;
use App\Http\Resources\Users\UserResource;
use App\Services\Users\CreateUserService;
use App\Services\Users\DeleteUserService;
use App\Services\Users\FindUserService;
use App\Services\Users\FindUsersService;
use App\Services\Users\UpdateUserService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class UserController extends Controller
{
    public function index(FindUsersService $findUsersService): AnonymousResourceCollection
    {
        $users = $findUsersService->execute();

        return UserResource::collection($users);
    }

    public function store(CreateUserService $createUserService, CreateUserRequest $request): UserResource
    {
        $userData = $request->validated();
        $user = $createUserService->execute($userData);

        return new UserResource($user);
    }

    public function show(FindUserService $findUserService, int $id): UserResource
    {
        $user = $findUserService->execute($id);

        return new UserResource($user);
    }

    public function update(
        UpdateUserService $updateUserService,
        UpdateUserRequest $request,
        int $id
    ): UserResource {
        $userData = $request->validated();
        $user = $updateUserService->execute($id, $userData);

        return new UserResource($user);
    }

    public function destroy(DeleteUserService $deleteUserService, $id): UserResource
    {
        $user = $deleteUserService->execute($id);

        return new UserResource($user);
    }
}
