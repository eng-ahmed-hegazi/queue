@extends('layouts.app')
@section('content')
    @include('admin.includes.errors')
    <div class="panel panel-primary">
        <div class="panel-heading">
            Edit Reply
        </div>
        <div class="panel-body">
            <form action="{{route('reply.update',$reply->id)}}" class="form" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="content">Enter Question</label>
                    <textarea name="content" id="content" placeholder="enter question" class="form-control" cols="6" rows="10">
                    {{$reply->content}}
                    </textarea>
                </div>
                <div class="form-group text-center">
                    <input class="btn btn-primary" type="submit" value="Edit Reply">
                </div>
            </form>
        </div>
    </div>
@endsection
