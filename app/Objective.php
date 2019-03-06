<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objective extends Model
{
    protected $guarded = [];
    public function keyResults(){
        return $this->hasMany(KeyResult::class);
    }
    public function unit(){
        return $this->belongsTo(Unit::class);
    }
}
