<?php

use Illuminate\Support\Facades\Route;
use Modules\Project\Http\Controllers\ProjectController;

Route::apiResource('projects', ProjectController::class)->names('project');
