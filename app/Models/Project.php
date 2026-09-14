<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $table = 'projects';

    protected $fillable = [
        'name',
        'description',
        'user_id',
    ];

    // N:1 relationships with users
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 1:N relationships with tasks and categories
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}

