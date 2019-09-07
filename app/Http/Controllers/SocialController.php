<?php

namespace App\Http\Controllers;

use SocialAuth;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function auth($provider){

        return SocialAuth::authorize($provider);
    }
    public function callback($provider){
        /*SocialAuth::login($provider,function ($user,$details){
            dd($details);
           $user->avatar =  $details->avatar;
           $user->name =  $details->name;
           //$user->password = 00000000; //or made it null in the migration file
        });*/
    }
}
