@extends('front')
@section('search')
    <div class="row"  style="padding:50px">
        <div class="col-lg-12 text-center">
            <img src="{{asset('img/queue.png')}}" alt="" class="img-fluid ">
        </div>
    </div>
    <div class="clearfix"></div>
@endsection
@section('content')

    <h1 class="page-header" style="padding: 25px 0;color: #ddd">
        <span class="fa fa-angle-double-right"></span> Tags
    </h1>
    <div class="row">
        @foreach($tags as $tag)
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 20px">
                <div class="card text-white bg-primary" style="max-width: 20rem;">
                    <div class="card-header">
                        <h6 style="color: #fff;height: 10px">
                           <span class="fa fa-tag"></span> 
                           <a href="{{route('tag.index',$tag->id)}}" class="text-white">{{$tag->tag}}</a>
                        </h6>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection