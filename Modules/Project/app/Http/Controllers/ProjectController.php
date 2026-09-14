<?php

namespace Modules\Project\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Project\Http\Requests\ProjectStoreRequest;
use Modules\Project\Http\Requests\ProjectUpdateRequest;
use Modules\Project\Services\ProjectService;
use Modules\Project\Transformers\ProjectCollection;
use Modules\Project\Transformers\ProjectResource;

class ProjectController extends Controller
{
    public function __construct(
        protected ProjectService $projectService
    )
    {
    }

    public function index()
    {
        $projects = $this->projectService->getAll();
        return new ProjectCollection($projects);
    }

    public function show(int $project)
    {
        $project = $this->projectService->getById($project);
        return new ProjectResource($project);
    }

    public function store(ProjectStoreRequest $request)
    {
        $project = $this->projectService->create($request->validated());
        return new ProjectResource($project);
    }

    public function update(ProjectUpdateRequest $request, int $project)
    {
        $project = $this->projectService->update($project, $request->validated());
        return new ProjectResource($project);
    }

    public function destroy(int $project)
    {
        $this->projectService->delete($project);

        return response()->noContent();
    }
}
