<?php

namespace Modules\Project\Repositories;

use App\Models\Project;
use App\Repositories\BaseRepository;
use Modules\Project\Interfaces\ProjectRepositoryInterface;

class ProjectRepository extends BaseRepository implements ProjectRepositoryInterface
{
    public function __construct(
        protected Project $project
    )
    {
        parent::__construct($project);
    }
}
