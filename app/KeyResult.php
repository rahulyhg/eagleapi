<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeyResult extends Model
{
    protected $guarded = [];
    public function objective(){
        return $this->belongsTo(Objective::class);
    }
}
