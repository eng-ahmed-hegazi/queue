<?php

namespace App\Http\Controllers;

use App\Like;
use App\Reply;
use Auth;
use Session;
use App\User;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function like($id){

        Like::create([
            'reply_id'  => $id,
            'user_id'   => Auth::id()
        ]);
        $reply = Reply::find($id);
        $reply->user->points +=10;
        $reply->user->save();

        Session::flash('success','Like Added');
        return redirect()->back();
    }

    public function unlike($id){

        $like = Like::where([
            'reply_id' => $id,
            'user_id'   => Auth::id()
        ])->first();

        $reply = Reply::find($id);
        $reply->user->points -=10;
        $reply->user->save();

        $like->delete();
        Session::flash('success','Unlike Added');
        return redirect()->back();
    }

    public function best_answer($id){

        $max = User::max('points');
        $user = User::where('points',$max)->first();

        $reply = Reply::find($id);
        $reply->best_answer = 1;

        Session::flash('success','Reply marked as best answer');
        return redirect()->back();
    }

    public function edit($id){
        $reply = Reply::find($id);
        return view('admin.replies.edit',[
            'reply' => $reply
        ]);
    }

    public function update($id){
        $reply = Reply::find($id);
        $reply->content = request('content');
        $reply->save();

        Session::flash('success','Reply Updated successfully');

        return redirect()->route('discussion.show',$reply->discussion->slug);
    }
}
