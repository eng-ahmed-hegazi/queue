@extends('home')
@section('content')
    <div style="padding: 20px 0px">
        <div class="row">
            <div class="col-lg-10">
                @include('admin.includes.errors')
            </div>
        </div>
        <div class="row" >
            <div class="col-lg-10">
                <form action="{{route('admin.profile.update')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('POST')}}
                    <div class="card bg-dark" style="border: 0;">
                        <div class="card-header" style="padding: 25px">
                            <div class="pull-left contain col-lg-3" style="border: 0">
                                <img src="{{asset(Auth::guard('admin')->user()->avatar)}}" width="200" height="200" class="img-fluid image">
                                <div class="middle">
                                    <div id="yourBtn" onclick="getFile()">Upload Image</div>
                                    <div style='height: 0px;width: 0px; overflow:hidden;'><input id="upfile" name="image" type="file" value="upload" onchange="sub(this)"/></div>
                                </div>
                            </div>
                            <div class="pull-left text-left col-lg-5" style="padding-left: 10px">
                                <h2>{{Auth::guard('admin')->user()->name}}</h2>
                                <h4 class="text-white">{{Auth::guard('admin')->user()->email}}</h4>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <input type="text" name="name" class="form-control"  style="background: #101014" placeholder="enter your name" value="{{Auth::guard('admin')->user()->name}}" required autofocus>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"  style="background: #101014" placeholder="enter your email" value="{{Auth::guard('admin')->user()->email}}" required autofocus>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }} "  style="background: #101014" placeholder="enter your new password">
                            </div>
                            @if(Auth::guard('admin')->user())
                                <div class="form-group">
                                    <textarea  class="form-control " placeholder="enter about you" style="height: 250px;background: #101014" name="about">{{Auth::guard('admin')->user()->about}}</textarea>
                                </div>
                            @else
                                <div class="form-group">
                                    <textarea  class="form-control"  placeholder="enter about you" style="height: 250px;background: #101014" name="about"></textarea>
                                </div>
                            @endif
                            <div class="form-group">
                                <input type="submit" value="Edit Profile" class="btn" style="background: #1a1a1a">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br><br>
    </div>
@endsection