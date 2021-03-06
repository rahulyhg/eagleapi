<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $guarded = [];
    public function employees(){
        return $this->hasMany(User::class);
    }
    public function lead(){
        return $this->belongsTo(User::class,'unit_lead');
    }
    public function objectives(){
        return $this->hasMany(Objective::class);
    }
    public function key_results(){
        return $this->hasManyThrough('App\KeyResult','App\Objective');
    }
}
