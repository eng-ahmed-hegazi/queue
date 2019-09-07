<?php

namespace App\Http\Controllers;

use App\Tag;
use Auth;
use Session;
use Notification;
use App\User;
use App\Reply;
use App\Discussion;
use App\Notifications\NewReplyAdded;


class DiscussionController extends Controller
{

    public function create()
    {
        return view('discussions.create');
    }

    public function store()
    {
        $this->validate(request(),[
            'title'     =>'required',
            'content'   =>'required',
            'channel_id'   =>'required',
            'tags'          =>'required'
        ]);

        $discussion = Discussion::create([
            'title'        =>request('title'),
            'content'      =>request('content'),
            'slug'         =>str_slug(request('title')),
            'channel_id'   =>request('channel_id'),
            'user_id'      =>Auth::id(),
            'comments'      => 0

        ]);
        $discussion->tags()->attach(request('tags'));
        Session::flash('success','Discussion created Successfully ');
        return redirect()->route('discussion.show',[
            'slug'=> $discussion->slug
        ]);
    }

    public function show($slug)
    {
        $discussion = Discussion::where('slug',$slug)->first();

        $best_answer = $discussion->replies()->where('best_answer',1)->first();

        return view('admin.discussions.discussion',[
            'discussion' => $discussion,
            'best_answer'=> $best_answer
        ]);
    }

    public function reply($id)
    {
        $discussion = Discussion::find($id);

        $reply = Reply::create([
            'user_id'       => Auth::id(),
            'discussion_id' => $id,
            'content'       => request('content')
        ]);
        $reply->user->points += 25;
        $reply->user->save();
        $discussion->comments++;
        $discussion->save();

        $watchers = array();

        foreach ($discussion->watchers as $watch):
            array_push($watchers,User::find($watch->user_id));
        endforeach;

        #---------------------------------------------------------------
        # work when set the mailtrap.io parameters
        # Notification::send($watchers,new NewReplyAdded($discussion));
        #---------------------------------------------------------------

        Session::flash('success','reply to the discussion');

        return redirect()->back();
    }

    public function edit($slug){
        $discussion = Discussion::where('slug',$slug)->first();
        return view('discussions.edit',[
            'discussion' => $discussion
        ]);
    }

    public function update($id){
        $this->validate(request(),[
            'content'     =>'required',
            'title'     =>'required',
            'channel_id'     =>'required'
        ]);

        $discussion = Discussion::find($id);
        $discussion->content = request('content');
        $discussion->title = request('title');
        $discussion->channel_id = request('channel_id');
        $discussion->save();

        Session::flash('success','discussion updated successfully');

        return redirect()->route('discussion.show',$discussion->slug);
    }

    public function destroy($id){
        $discussion = Discussion::find($id);
        $discussion->destroy($id);
        Session::flash('success','Discussion Deleted Successfully');
        return redirect()->route('discussion.my');
    }
}
