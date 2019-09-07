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
        <span class="fa fa-angle-double-right"></span> Add Discussion
    </h1>
    <div class="row">
        <div class="col-lg-8">
            @if ($errors->any())
                <div class="alert alert-dismissible bg-primary">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h4 class="alert-heading">Warning!</h4>
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li class="text-white">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="panel panel-primary col-lg-8">
            <div class="panel-body">
                <form action="{{route('discussions.store')}}" class="form" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="channel_id">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="enter title" style="background: #1a1a1a">
                    </div>
                    <div class="form-group">
                        <label for="channel_id">Pick Channel</label>
                        <select class="form-control" name="channel_id" id="channel_id" style="height: 50px;background: #1a1a1a">
                            @foreach($channels as $channel)
                                <option name="{{$channel->id}}" value="{{$channel->id}}" style="background: #1a1a1a">{{$channel->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="customCheck1">Choose Tags</label>
                            @foreach($tags as $tag)
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" value="{{$tag->id}}" name="tags[]" id="customCheck{{$tag->id}}" class="custom-control-input">
                                    <label class="custom-control-label" for="customCheck{{$tag->id}}">{{$tag->tag}}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content">Enter Question</label>
                        <textarea name="content" id="content" style="background: #1a1a1a" placeholder="enter question" class="form-control" cols="6" rows="10"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <input class="btn btn-success" type="submit" value="Add Discussion">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection