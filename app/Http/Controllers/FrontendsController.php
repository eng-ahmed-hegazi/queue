<?php

namespace App\Http\Controllers;

use App\Channel;
use App\Reply;
use Illuminate\Http\Request;
use App\Discussion;
use App\User;
use App\Like;
use App\Profile;
use App\Setting;
use App\Tag;
use DB;
use Auth;


class FrontendsController extends Controller
{
    public function index(){
        $settings = Setting::first();
        $settings->vistores +=1;
        $settings->save();

        $discussion = Discussion::with('channel')->where('approval',1)->orderBy('comments','desc')->take(6)->get();
        foreach (Discussion::all() as $discuss):
            $discuss->comments = count($discuss->replies);
            $discuss->save();
        endforeach;
        return view('index',[
            'discussions'       => $discussion,
            'settings'          => $settings
        ]);
    }

    public function discussion($slug){
        $discussion = Discussion::where('slug',$slug)->first();
        $best_answer = $discussion->replies()->where('best_answer',1)->first();
        $discussion->views++;
        $discussion->save();

       if($discussion->approval == 1){
           return view('discussions.discussion',[
               'discussion' => $discussion,
               'best_answer'=> $best_answer
           ]);
       }else{
           return view('discussions.approval',[
               'discussion' => $discussion,
           ]);
       }
    }

    public function channels(){
        $channels = Channel::all();
        return view('channels',[
            'channels' => $channels
        ]);
    }

    public function channel($id){
        $discussions = Discussion::where('channel_id',$id)->paginate(6);
        $channel = Channel::find($id);
        return view('channel',[
            'discussions'   => $discussions,
            'channel'       => $channel
        ]);
    }

    public function open(){
        $solved = array();
        foreach (Discussion::where('approval',1)->get() as $discuss):
            if(!$discuss->has_best_answer()){
                array_push($solved,$discuss);
            }
        endforeach;
        return view('discussions.open',[
            'open'  => $solved
        ]);
    }

    public function close(){
        $unsolved = array();
        foreach (Discussion::where('approval',1)->get() as $discuss):
            if($discuss->has_best_answer()){
                array_push($unsolved,$discuss);
            }
        endforeach;
        return view('discussions.close',[
            'close'  => $unsolved
        ]);
    }

    public function watched(){
        $watched = array();
        foreach (Discussion::where('approval',1)->get() as $discuss):
            if(!$discuss->is_being_watching_by_auth_user()){
                array_push($watched,$discuss);
            }
        endforeach;
        return view('discussions.watch',[
           'watch'  => $watched
        ]);
    }

    public function users(){
        $users = User::with('profile')->get();

        return view('users.users',[
            'users' => $users
        ]);
    }

    public function user($id){
        return view('users.user');
    }

    public function profilecreate (){
        return view('users.profile');
    }

    public function update(Request $request)
    {

        # delete id from the pharamter because Auth::user() is accessible every ware in view
        # controller will edit the profile of the logged in user
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'facebook' => 'required|url',
            'youtube' => 'required|url',
            'about' => 'required'
        ]);

        $user=Auth::user();
        if($request->hasFile('image')) {
            # image handling
            $image = $request->file('image'); //get the input
            $image_new_name = time() . trim($image->getClientOriginalName());//set anew name
            $image->move('uploads/users', $image_new_name); //upload the image to the new path
            $user->avatar='uploads/users/'.$image_new_name;
        }
        $profile=new Profile;
        $profile->user_id=$user->id;

        $user->name=$request->input('name');
        $user->email=$request->input('email');

        $profile->facebook=$request->input('facebook');
        $profile->youtube=$request->input('youtube');
        $profile->about=$request->input('about');


        if(request('password') != null)
        {
            dd('not null');
            $user->password=bcrypt($request->input('password'));
        }
        $user->save();
        $profile->save();

        return redirect('/profile');
    }

    public function search(){
        $discussion = Discussion::where('title','like','%'.request('query').'%')->paginate(8);
        return view('search',[
            'discussions'         => $discussion,
            'title'         => request('query'),
            'query'         => request('query')
        ]);
    }

    public function my(){
        $discussions = Discussion::where('user_id',Auth::user()->id)->paginate(6);
        return view('discussions.my',[
            'discussions'         => $discussions
        ]);
    }

    public function recent(){
        $discussions = Discussion::orderBy('id','desc')->paginate(6);
        return view('discussions.recent',[
            'discussions'         => $discussions
        ]);
    }

    public function wildcard(){
        return view('404');
    }

    public function contact(){
        return view('contacts');
    }

    public function about(){
        return view('about');
    }
    public function tags()
    {
        $tags = Tag::all();
        return view('tags',[
            'tags' => $tags
        ]);
    }

    public function tag($id)
    {
        $tags = Tag::find($id);
        return view('tag',[
            'tags' => $tags
        ]);
    }
}
