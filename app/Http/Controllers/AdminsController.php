<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function create(){
        return view('admin.login');
    }

    public function store(){
        if(Auth::guard('admin')->attempt(['email'=>request('email'),'password' => request('password')])){
            return redirect('/dashboard/index');
        }else{
            return back();
        }
    }

    public function logout(Request $request)
    {

        Auth::guard('admin')->logout();
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect()->guest(url('/admin/login'));
    }

    public function profilecreate (){
        return view('admin.profile');
    }

    public function update(Request $request)
    {

        # delete id from the pharamter because Auth::user() is accessible every ware in view
        # controller will edit the profile of the logged in user
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'about' => 'required'
        ]);

        $admin = Auth::guard('admin')->user();
        if($request->hasFile('image')) {
            # image handling
            $image = $request->file('image'); //get the input
            $image_new_name = time() . trim($image->getClientOriginalName());//set anew name
            $image->move('uploads/users', $image_new_name); //upload the image to the new path
            $admin->avatar='uploads/users/'.$image_new_name;
        }
        $admin->name=$request->input('name');
        $admin->email=$request->input('email');
        $admin->about=$request->input('about');


        if(request('password') != null)
        {
            dd('not null');
            $admin->password=bcrypt($request->input('password'));
        }
        $admin->save();
        return redirect('/dashboard');
    }
}
