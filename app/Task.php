<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];
    public function goal(){
        return $this->belongsTo(IndGoal::class);
    }
    public function ipm(){
        return $this->belongsTo(IPM::class,'ipm_id');
    }
    public function employee(){
        return $this->belongsTo(IPM::class,'employee_id');
    }
}
