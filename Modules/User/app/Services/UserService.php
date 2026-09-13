<?php

namespace Modules\User\Services;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Modules\User\Interfaces\UserRepositoryInterface;

class UserService
{
    public function __construct(
        protected UserRepositoryInterface $userRepository
    )
    {
    }

    public function getAll(): Collection
    {
        return $this->userRepository->getAll();
    }

    public function getById(int $id): ?User
    {
        return $this->userRepository->findById($id);
    }

    public function create(array $data): User
    {
        return $this->userRepository->create($data);
    }

    public function update(int $id, array $data): User
    {
        return $this->userRepository->update($id, $data);
    }

    public function delete(int $id): bool
    {
        return $this->userRepository->delete($id);
    }
}
