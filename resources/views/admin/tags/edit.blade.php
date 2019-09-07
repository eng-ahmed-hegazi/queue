
@extends('home');
@section('content')
    @include('admin.includes.errors')
    <div class="card bg-dark">
        <h4 class="card-header text-uppercase text-white">
            EDIT Tag {{$edit->id}}
        </h4>
        <div class="card-body">
            <form action="{{route('tags.update',$edit->id)}}" method="post" class="form">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="form-group">
                    <label for="name">Tag</label>
                    <input type="text" value="{{$edit->tag}}" name="tag" placeholder="enter tag" class="form-control" style="background: #1a1a1a">
                </div>
                <div class="formgroup text-center">
                    <input type="submit" value="update tag" class="btn btn-success btn-md">
                </div>
            </form>
        </div>
    </div>
@endsection