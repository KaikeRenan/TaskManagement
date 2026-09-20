<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Project\Interfaces\ProjectRepositoryInterface;
use Modules\Project\Repositories\ProjectRepository;
use Modules\Task\Interfaces\TaskRepositoryInterface;
use Modules\Task\Repositories\TaskRepository;
use Modules\User\Interfaces\UserRepositoryInterface;
use Modules\User\Repositories\UserRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(ProjectRepositoryInterface::class, ProjectRepository::class);
        $this->app->bind(TaskRepositoryInterface::class, TaskRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
