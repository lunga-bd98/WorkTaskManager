<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function members()
    {
        return $this->belongsToMany(User::class);
    }

    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }

}
