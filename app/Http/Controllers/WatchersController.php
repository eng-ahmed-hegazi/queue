<?php

namespace App\Http\Controllers;
use App\Discussion;
use App\Watcher;
use Auth;
use Session;
use Illuminate\Http\Request;

class WatchersController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function watch($id){

        Watcher::create([
            'discussion_id' => $id,
            'user_id'       => Auth::id()
        ]);
        $discussion = Discussion::find($id);
        Session::flash('success','you are watching this discussion');

        return redirect('/discussion/'.$discussion->slug);
    }

    public function unwatch($id){

        $watcher = Watcher::where([
            'discussion_id' => $id,
            'user_id'       => Auth::id()
        ]);

        $watcher->delete();
        $discussion = Discussion::find($id);
        Session::flash('success','you are unwatching this discussion');
        return redirect('/discussion/'.$discussion->slug);
    }
}
