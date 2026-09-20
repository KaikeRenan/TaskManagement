<?php

namespace Modules\Task\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Task\Http\Requests\TaskStoreRequest;
use Modules\Task\Http\Requests\TaskUpdateRequest;
use Modules\Task\Services\TaskService;
use Modules\Task\Transformers\TaskCollection;
use Modules\Task\Transformers\TaskResource;

class TaskController extends Controller
{
    public function __construct(
        protected TaskService $taskService
    )
    {
    }

    public function index()
    {
        $tasks = $this->taskService->getAll();
        return new TaskCollection($tasks);
    }

    public function show(int $task)
    {
        $task = $this->taskService->getById($task);
        return new TaskResource($task);
    }

    public function store(TaskStoreRequest $request)
    {
        $task = $this->taskService->create($request->validated());
        return new TaskResource($task);
    }

    public function update(TaskUpdateRequest $request, int $task)
    {
        $task = $this->taskService->update($task, $request->validated());
        return new TaskResource($task);
    }

    public function destroy(int $task)
    {
        $this->taskService->delete($task);

        return response()->noContent();
    }
}
