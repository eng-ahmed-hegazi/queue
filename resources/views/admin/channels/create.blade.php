@extends('home')
@section('content')
    @include('admin.includes.errors')
    <div class="card bg-dark" style="margin-top: 50px">
        <h4 class="card-header">
            Add Channel
        </h4>
        <div class="card-body">
            <form action="{{route('channels.store')}}" class="form" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title"></label>
                    <input type="text" name="title" id="title" placeholder="enter title" class="form-control" style="background: #1a1a1a">
                </div>
                <div class="form-group text-center">
                    <input class="btn btn-success" type="submit" value="Add Channel">
                </div>
            </form>
        </div>
    </div>
@endsection
