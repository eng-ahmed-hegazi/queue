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
        <span class="fa fa-angle-double-right"></span><span>{{$channel->title}}</span>
        <span class="badge badge-pill badge-dark">{{count($channel->discussions)}}</span>
    </h1>
    <div class="row">
        @foreach($discussions as $discuss)
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 20px">
                <div class="card text-white bg-primary" style="max-width: 20rem;">
                    <div class="card-header">
                        <h6 style="color: #fff;height: 10px">
                            {{$discuss->title}}
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="contain">
                            <img src="{{asset('img/img.png')}}" alt="" class="img-fluid image" width="250">
                            <div class="middle">
                                <div class="text text-uppercase">{{$discuss->channel->title}}</div>
                            </div>
                        </div>
                        <p>{{str_limit($discuss->content,70)}}</p>
                        <a href="{{route('discussion.show',$discuss->slug)}}" style="color: #fff;" class="pull-right">
                            <strong>More <span class="fa fa-angle-double-right"></span></strong>
                        </a>
                    </div>
                    <div class="card-footer">
                    <span class="text-capitalize">
                        <span class="fa fa-comment"></span> {{count($discuss->replies)}}
                    </span>
                        <span class="pull-right">
                        <span class="fa fa-clock-o"></span> <i>{{$discuss->created_at->diffForHumans()}}</i>
                    </span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4 text-center">
            {{ $discussions->links('pagination') }}
        </div>
    </div>
@endsection