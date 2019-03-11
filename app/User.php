<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function unit(){
        return $this->belongsTo(Unit::class);
    }

    public function ipms(){
        return $this->hasMany(IPM::class,'employee_id');
    }
    public function role(){
        return $this->belongsTo(Role::class);
    }
    public function goals(){
        return $this->hasMany(IndGoal::class,'employee_id');
    }
    public function tasks(){
        return $this->hasMany(Task::class,'employee_id');
    }
    public function supervisor(){
        return $this->belongsTo(User::class,'supervisor_id');
    }
    public function supervises(){
        return $this->hasMany(User::class,'supervisor_id');
    }
}
