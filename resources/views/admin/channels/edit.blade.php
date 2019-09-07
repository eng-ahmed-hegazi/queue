@extends('home')
@section('content')
    <div style="padding: 20px 0;">
        @include('admin.includes.errors')
        <div class="card bg-dark">
            <div class="card-header ">
                Edit Channel
            </div>
            <div class="card-body">
                <form action="{{route('channels.update',$channel->id)}}" class="form" method="post">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="form-group">
                        <label for="title"></label>
                        <input type="text" name="title" value="{{$channel->title}}" id="title" placeholder="enter title" class="form-control" style="background: #1a1a1a">
                    </div>
                    <div class="form-group text-center">
                        <input class="btn btn-primary" type="submit" value="Edit Channel">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
