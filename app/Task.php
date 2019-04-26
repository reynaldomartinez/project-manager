<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = ['task', 'project_id'];

    public function project()
    {
        $this->belongsTo(Project::class);
    }

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
