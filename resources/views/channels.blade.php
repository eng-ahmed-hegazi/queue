@extends('front')
@section('search')
    <div class="row" style="padding:50px">
        <div class="col-lg-12 text-center">
            <img src="{{asset('img/queue.png')}}" alt="" class="img-fluid ">
        </div>
    </div>
    <div class="clearfix"></div>
@endsection
@section('content')
    <div class="row" style="padding-bottom: 20px">
        <h2><span class="fa fa-angle-double-right"></span>Channels</h2>
    </div>
    <div class="row">
        @foreach($channels as $channel)
            <div class="col-lg-12" >
                <div class="card bg-primary " style="padding: 15px;">
                    <h4 class="card-header">
                        <a href="{{route('single.channel',$channel->id)}}" class="text-white">
                            {{ $channel->title}}
                        </a>
                    </h4>
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="{{asset('img/local.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-9">
                            <div class="card-body">
                                <h6 class="text-muted text-left">
                                    <table class="table-striped">
                                        <tr style="border-bottom: 1px solid #111111;" class="bg-dark">
                                            <th style="width: 100%;padding: 7px 4px">Title</th>
                                            <th class="text-center">Replies</th>
                                            <th class="text-center">Views</th>
                                            <th>Visit</th>
                                        </tr>
                                        @foreach($channel->discussions as $discuss)
                                            <tr style="border-bottom: 1px solid #111111;">
                                                <td style="width: 100%;padding: 7px 0px">{{$discuss->title}}</td>
                                                <td class="text-center">{{count($discuss->replies)}}<span class="fa fa-comment"></span></td>
                                                <td class="text-center" >{{$discuss->views}}<spab class="fa fa-eye"></spab></td>
                                                <td><a href="{{route('discussion.show',$discuss->slug)}}" style="color: #fff;">Visit</a></td>
                                            </tr>
                                        @endforeach

                                    </table>

                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        @endforeach
    </div>
@endsection