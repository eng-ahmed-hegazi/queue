<?php

namespace App\Http\Controllers;

use App\Channel;
use App\Discussion;
use App\Reply;
use App\Watcher;
use Illuminate\Http\Request;
use App\User;
use PhpParser\Comment;
use Session;
use App\Setting;
class BackendsController extends Controller
{
    public function users(){
        $user = User::paginate(10);
        return view('admin.users',[
            'users' => $user
        ]);
    }

    public function delete($id){
        $user = User::find($id);
        $user->destroy($id);
        Session::flash('success','Deleted Successfully');
        return redirect()->route('users.index');
    }

    public function settings(){
        $settings = Setting::all()->first();
        return view('admin.settings.edit',compact('settings'));
    }

    public function settingupdate(Request $request){
        $this->validate($request,[
            'site_name'=>'required',
            'contact_email'=>'required|email',
            'contact_number'=>'required',
            'address'=>'required',
            'about'=>'required'
        ]);
        $edit = Setting::all()->first();
        $edit->site_name=$request->input('site_name');
        $edit->contact_email=$request->input('contact_email');
        $edit->contact_number=$request->input('contact_number');
        $edit->address=$request->input('address');
        $edit->about=$request->input('about');
        $edit->save();
        Session::flash('success','Setting edited Successfully');
        return redirect(route('home'));
    }

    public function discussions(){
        $discussions = Discussion::paginate(10);
        return view('admin.discussions',[
            'discussions' => $discussions
        ]);
    }

    public function accept($id){
        $discussion = Discussion::find($id);
        $discussion->approval = 1;
        $discussion->save();
        Session::flash('success','Permession Added Successfully');
        return redirect()->back();
    }

    public function reject($id){
        $discussion = Discussion::find($id);
        $discussion->approval = 0;
        $discussion->save();
        Session::flash('success','Permession Deleted Successfully');
        return redirect()->back();
    }
    public function destroy($id){
        $discussion = Discussion::find($id);
        $discussion->destroy($id);
        Session::flash('success','Deleted Successfully');
        return redirect()->back();
    }

    public function index(){
        $open = 0;
        $close = 0;
        foreach (Discussion::all() as $discuss):
            if($discuss->has_best_answer()){
                $close++;
            }else{
                $open++;
            }
        endforeach;

        return view('admin.index',[
            'channels'   => Channel::count(),
            'discussions'=> Discussion::count(),
            'waited'     => Discussion::where('approval',0)->count(),
            'users'      => User::count(),
            'replay'     => Reply::count(),
            'watched'    => Watcher::count(),
            'open'       => $open,
            'close'      => $close
        ]);
    }
}
