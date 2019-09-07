
@extends('home');
@section('content')
    @include('admin.includes.errors')
    <div class="panel panel-primary">
        <h4 class="card-header text-uppercase text-white">
            create new tag
        </h4>
        <div class="panel-body">
            <form action="{{route('tags.store')}}" method="post" class="form">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="tag">Title</label>
                    <input type="text" value="{{old('tag')}}" name="tag" placeholder="enter tag" class="form-control" style="background: #1a1a1a">
                </div>
                <div class="formgroup text-center">
                    <input type="submit" value="create new tag" class="btn btn-primary  btn-md">
                </div>
            </form>
        </div>
    </div>
@endsection