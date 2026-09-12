<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'project_id',
    ];

    // N:1 relationships with projects
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    // 1:N relationships with tasks
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
