<?php

use Illuminate\Support\Facades\Route;
use Modules\Project\Http\Controllers\ProjectController;

Route::resource('projects', ProjectController::class)->names('project');
