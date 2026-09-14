<?php

namespace Modules\Project\Services;

use App\Models\Project;
use Illuminate\Database\Eloquent\Collection;
use Modules\Project\Interfaces\ProjectRepositoryInterface;

class ProjectService
{
    public function __construct(
        protected ProjectRepositoryInterface $projectRepository
    )
    {
    }

    public function getAll(): Collection
    {
        return $this->projectRepository->getAll();
    }

    public function getById(int $id): ?Project
    {
        return $this->projectRepository->findById($id);
    }

    public function create(array $data): Project
    {
        return $this->projectRepository->create($data);
    }

    public function update(int $id, array $data): Project
    {
        return $this->projectRepository->update($id, $data);
    }

    public function delete(int $id): bool
    {
        return $this->projectRepository->delete($id);
    }
}
