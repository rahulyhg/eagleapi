<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [];
    public function employees(){
        return $this->hasMany(User::class,'role_id');
    }
}
