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
    @include('admin.includes.errors')
    <h1 class="page-header" style="padding: 25px 0;color: #ddd">
        <span class="fa fa-angle-double-right"></span> Edit Discussion
    </h1>
    <div class="card text-white bg-dark " style="box-shadow: 10px 10px 35px rgba(0, 0, 0, 1);padding: 15px">
        <img src="{{asset('img/kk.jpg')}}" alt="" class="img-fluid"><br>
        <h4 class="card-header">
            {{$discussion->title}}
        </h4>
        <p>
            {{$discussion->content}}
        </p>
    </div>
    <div class="row">
        <div class="panel panel-primary col-lg-8">

            <div class="panel-body">
                <form action="{{route('discussion.update',$discussion->id)}}" class="form" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="channel_id">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="enter title" style="background: #1a1a1a" value="{{$discussion->title}}">
                    </div>
                    <div class="form-group">
                        <label for="channel_id">Pick Channel</label>
                        <select class="form-control" name="channel_id" id="channel_id" style="height: 50px;background: #1a1a1a">
                            @foreach($channels as $channel)
                                <option name="{{$channel->id}}" value="{{$channel->id}}" style="background: #1a1a1a"
                                        @if($channel->id == $discussion->channel->id)
                                            selected
                                        @endif
                                >{{$channel->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="content">Enter Question</label>
                        <textarea name="content" style="background: #1a1a1a" id="content" placeholder="enter question" class="form-control" cols="6" rows="10">{{$discussion->content}}</textarea>
                    </div>
                    <div class="form-group text-center">
                        <input class="btn btn-info" type="submit" value="Edit Discussion">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection