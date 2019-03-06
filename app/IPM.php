<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IPM extends Model
{
    protected $guarded = [];
    public function employee(){
        return $this->belongsTo(User::class,'employee_id');
    }

    public function tasks(){
        return $this->hasMany(Task::class,'goal_id');
    }
}
