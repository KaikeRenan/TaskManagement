<?php

namespace Modules\Task\Repositories;

use App\Models\Task;
use App\Repositories\BaseRepository;
use Modules\Task\Interfaces\TaskRepositoryInterface;

class TaskRepository extends BaseRepository implements TaskRepositoryInterface
{
    public function __construct(
        protected Task $task
    )
    {
        parent::__construct($task);
    }
}
