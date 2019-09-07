@extends('home')
@section('content')
    <div style="margin: 30px 0px">
        @include('admin.includes.errors')
        <div class="card bg-dark">
            <div class="card-header text-uppercase">
                edit settings
            </div>
            <div class="card-body">
                <form action="{{route('settings.update')}}" method="post" class="form">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="site_name">SITE NAME</label>
                        <input type="text" style="background: #1a1a1a" value="{{$settings->site_name}}" name="site_name" placeholder="enter site name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="contact_number">CONTACT NUMBER</label>
                        <input type="text" style="background: #1a1a1a" value="{{$settings->contact_number}}" name="contact_number" placeholder="enter contact number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="contact_email">CONTACT EMAIL</label>
                        <input type="email" style="background: #1a1a1a" value="{{$settings->contact_email}}" name="contact_email" placeholder="enter email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">ADDRESS</label>
                        <input type="text" style="background: #1a1a1a" value="{{$settings->address}}" name="address" placeholder="enter name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="name">ABOUT</label>
                        <textarea placeholder="enter about" id="content" name="about" cols="5" rows="50" style="min-height: 250px;background: #1a1a1a;border: 0;" class="form-control" sty>
                        {{$settings->about}}
                    </textarea>
                    </div>
                    <div class="form-group text-center" style="padding-bottom: 30px">
                        <input type="submit" value="Update Settings" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('style')
    <link rel="stylesheet" href="{{asset('css/summernote.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}" type="text/css">
@endsection
@section('script')
    <script src="{{asset('js/summernote.js')}}" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('#content').summernote();
        });

    </script>
@endsection