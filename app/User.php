<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','avatar','points'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getFeaturedAttributes($featured){
        return asset($featured);
    }

    public function profile(){
        return $this->hasOne('App\Profile');
    }

    public function replies(){
        return $this->hasMany('App\Reply');
    }

    public function discussions(){
        return $this->hasMany('App\Discussion');
    }

    public function likes(){
        return $this->hasMany('App\Like');
    }
}
