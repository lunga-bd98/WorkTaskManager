<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function status()
    {
        return $this->belongsTo(TaskStatus::class, 'task_status_id');
    }
    public function creator() {
    return $this->belongsTo(User::class, 'created_by');
    }
    public function users() {
        return $this->belongsToMany(User::class);
    }
    public function teams() {
        return $this->belongsToMany(Team::class);
    }
    public function reports() {
        return $this->hasMany(TaskReport::class);
    }
    public function comments() {
        return $this->hasMany(TaskComment::class);
    }

    public function attachments() {
        return $this->hasMany(TaskAttachment::class);
    }

}
