<?php

namespace Modules\Task\Services;

use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;
use Modules\Task\Interfaces\TaskRepositoryInterface;

class TaskService
{
    public function __construct(
        protected TaskRepositoryInterface $taskRepository
    )
    {
    }

    public function getAll(): Collection
    {
        return $this->taskRepository->getAll();
    }

    public function getById(int $id): ?Task
    {
        return $this->taskRepository->findById($id);
    }

    public function create(array $data): Task
    {
        return $this->taskRepository->create($data);
    }

    public function update(int $id, array $data): Task
    {
        return $this->taskRepository->update($id, $data);
    }

    public function delete(int $id): bool
    {
        return $this->taskRepository->delete($id);
    }
}
