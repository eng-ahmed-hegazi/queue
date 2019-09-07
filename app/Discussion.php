<?php

namespace App;
use Auth;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    protected $fillable = ['user_id','title','content','channel_id','slug','comments'];

    public function channel(){
        return $this->belongsTo('App\Channel','channel_id','id');
    }

    public function replies(){
        return $this->hasMany('App\Reply');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function watchers(){
        return $this->hasMany('App\Watcher');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag');
    }

    public function is_being_watching_by_auth_user(){

        $id = Auth::id();
        $watchers = array();

        foreach ($this->watchers as $watch):
            array_push($watchers,$watch->user_id);
        endforeach;

        if(in_array($id,$watchers)){
            return true;
        }
        else{
            return false;
        }
    }

    public function has_best_answer(){

        $resullt = false;
        foreach ($this->replies as $reply):
           if($reply->best_answer){
            $resullt = true;
            break;
           }
        endforeach;

        return $resullt;
    }

    public function is_best_answer(){

        $resullt = false;
        foreach ($this->replies as $reply):
            if($reply->best_answer){
                $reply->best_answer = 0;
            }
        endforeach;
        foreach ($this->replies as $reply):
            if($reply->likes->max()){
                $reply->best_answer = 1;
                $resullt = true;
                break;
            }
        endforeach;
        return $resullt;
    }

}
