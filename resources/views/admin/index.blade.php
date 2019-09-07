@extends('home')
@section('content')
<div class="row" style="padding: 30px 0;">
    <div class="col-lg-3">
        <div class="card bg-primary" style="margin-bottom: 20px;background: #1a1a1a;border-radius: 20px">
            <h5 class="card-header text-center text-white">
                Channels
            </h5>
            <h1 class="card-body text-white text-center" style="font-size: 30px;">
               <span style="position: absolute;top: 45px;left: 15px">{{$channels}}</span><br>
               <span class="fa fa-table fa-2x">
                   
               </span>
            </h1>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card bg-warning" style="margin-bottom: 20px;background: #1a1a1a;border-radius: 20px">
            <h5 class="card-header text-center text-white">
                Discussions
            </h5>
            <h1 class="card-body text-white text-center" style="font-size: 30px;">
               <span style="position: absolute;top: 45px;left: 15px">{{$discussions}}</span><br>
               <span class="fa fa-tasks fa-2x">
                   
               </span>
            </h1>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card bg-info" style="margin-bottom: 20px;background: #1a1a1a;border-radius: 20px">
            <h5 class="card-header text-center text-white">
                Waited
            </h5>
            <h1 class="card-body text-white text-center" style="font-size: 30px;">
               <span style="position: absolute;top: 45px;left: 15px">{{$waited}}</span><br>
               <span class="fa fa-tasks fa-2x">
                   
               </span>
            </h1>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card bg-danger" style="margin-bottom: 20px;background: #1a1a1a;border-radius: 20px">
           <h5 class="card-header text-center text-white">
                Users
            </h5>
            <h1 class="card-body text-white text-center" style="font-size: 30px;">
               <span style="position: absolute;top: 45px;left: 15px">{{$users}}</span><br>
               <span class="fa fa-users fa-2x">
                   
               </span>
            </h1>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card" style="margin-bottom: 20px;background: #1abc9c;border-radius: 20px">
            <h5 class="card-header text-center text-white">
                Replies
            </h5>
            <h1 class="card-body text-white text-center" style="font-size: 30px;">
               <span style="position: absolute;top: 45px;left: 15px">{{$replay}}</span><br>
               <span class="fa fa-comments fa-2x">
                   
               </span>
            </h1>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card " style="margin-bottom: 20px;background: #8e44ad;border-radius: 20px">
            <h5 class="card-header text-center text-white">
                Watched
            </h5>
            <h1 class="card-body text-white text-center" style="font-size: 30px;">
               <span style="position: absolute;top: 45px;left: 15px">{{$watched}}</span><br>
               <span class="fa fa-eye fa-2x">
                   
               </span>
            </h1>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card " style="margin-bottom: 20px;background: #6ab04c;border-radius: 20px">
            <h5 class="card-header text-center text-white">
                Open
            </h5>
            <h1 class="card-body text-white text-center" style="font-size: 30px;">
               <span style="position: absolute;top: 45px;left: 15px">{{$open}}</span><br>
               <span class="fa fa-tasks fa-2x">
                   
               </span>
            </h1>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card " style="margin-bottom: 20px;background: #2c3a47;border-radius: 20px">
            <h5 class="card-header text-center text-white">
                Open
            </h5>
            <h1 class="card-body text-white text-center" style="font-size: 30px;">
               <span style="position: absolute;top: 45px;left: 15px">{{$close}}</span><br>
               <span class="fa fa-tasks fa-2x">
                   
               </span>
            </h1>
        </div>
    </div>
</div>
@endsection