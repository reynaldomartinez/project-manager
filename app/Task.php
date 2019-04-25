<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = ['task'];

    public function project()
    {
        $this->belongsTo(Project::class);
    }
}
