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
    <div class="row" style="padding: 15px 0">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <h2 class="text-white">
                <span class="fa fa-angle-double-right"></span> Contact
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <form action="#" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('POST')}}
                <div class="form-group">
                    <input type="text" class="form-control " style="background: #101014" placeholder="enter your name" name="name" value="">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control " style="background: #101014" placeholder="enter your email" name="email" value="">
                </div>
                <div class="form-group">
                    <textarea  class="form-control " placeholder="enter your message" style="height: 250px;background: #101014" name="message"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark"><span class="fa fa-location-arrow"></span> Send</button>
                </div>
            </form>
        </div>
    </div>
@endsection