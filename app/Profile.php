<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable=['facebook','youtube','about'];

    public function profile(){
        return $this->belongsTo('App\User','user_id','id');
    }

    public function getFeaturedAttributes($featured){
        return asset($featured);
    }
}
