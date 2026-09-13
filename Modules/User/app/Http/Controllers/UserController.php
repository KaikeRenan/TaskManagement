<?php

namespace Modules\User\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\User\Http\Requests\UserStoreRequest;
use Modules\User\Http\Requests\UserUpdateRequest;
use Modules\User\Services\UserService;
use Modules\User\Transformers\UserCollection;
use Modules\User\Transformers\UserResource;

class UserController extends Controller
{
    public function __construct(
        protected UserService $userService
    )
    {
    }

    public function index()
    {
        $users = $this->userService->getAll();
        return new UserCollection($users);
    }

    public function show(int $user)
    {
        $user = $this->userService->getById($user);
        return new UserResource($user);
    }

    public function store(UserStoreRequest $request)
    {
        $user = $this->userService->create($request->validated());
        return new UserResource($user);
    }

    public function update(UserUpdateRequest $request, int $user)
    {
        $user = $this->userService->update($user, $request->validated());
        return new UserResource($user);
    }

    public function destroy(int $user)
    {
        $this->userService->delete($user);

        return response()->noContent();
    }
}
