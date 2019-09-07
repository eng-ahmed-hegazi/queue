@extends('front')
@section('search')
    <div  class="row"  style="padding:50px">
        <div class="col-lg-12 text-center">
            <img src="{{asset('img/queue.png')}}" alt="" class="img-fluid ">
        </div>
    </div>
    <div class="clearfix"></div>
@endsection
@section('content')
    <h2 class="page-header" style="padding: 25px 0;color: #ddd">
        <span class="fa fa-angle-double-right"></span> Users
    </h2>
    <div class="row" style="margin: 25px 0">

        @foreach($users as $user)
            <div class="col-lg-3">
                <div class="chip bg-primary">
                    <img src="{{$user->avatar ? asset($user->avatar) : asset('img/teammember4.png')}}" alt="Person" width="96" height="96" class="img-circle">
                    <span class="text-capitalize">{{$user->name}}</span>

                </div>
                <div class="information bg-primary" style="margin: 5px 0;padding: 12px;border-radius: 10px">
                    <h6 class="text-white" style="font-size: 10px">{{$user->email}}</h6>
                    <h6 class="text-white" style="font-size: 10px">Points : {{$user->points}}</h6>
                    @if($user->profile)
                        <h6 class="text-white" style="font-size: 10px">Facebook : <a class="text-white" style="font-size: 5px">{{$user->profile->facebook}}</a></h6>
                        <h6 class="text-white" style="font-size: 10px">Youtube : <a class="text-white" style="font-size: 5px">{{$user->profile->youtube}}</a></h6>
                        <h6 class="text-white" style="font-size: 10px">About Me : <a class="text-white" style="font-size: 5px">{{$user->profile->about}}</a></h6>
                    @else
                        <h6 class="text-white" style="font-size: 10px">Facebook : <a class="text-white" style="font-size: 5px">Please Add Facebook</a></h6>
                        <h6 class="text-white" style="font-size: 10px">Youtube : <a class="text-white" style="font-size: 5px">Please Add Youtube</a></h6>
                        <h6 class="text-white" style="font-size: 10px">About Me : <a class="text-white" style="font-size: 5px">Please Write Something About You</a></h6>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@endsection