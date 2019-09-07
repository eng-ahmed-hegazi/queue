<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Queue.com</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<style>
    .bg{
        background: #191919;
        height: 314px;
    }
    label{
        color: #fff;
    }
    .email{
        background: #101014;
        border:0;
        border-radius: 35px;
        height: 50px;

    }
    .email:focus {
        background: #101014;
    }
</style>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="page-header col-lg-12 text-center" style="padding:50px">
            <img src="{{ asset('img/queue.png') }}" alt="" class="img-fluid">
        </div>
    </div>
    <div class="row bg">
        <div class="col-lg-4"></div>
        <form method="POST" action="{{ route('admin.login') }}" class="col-lg-4 text-center" style="padding: 30px">
            @csrf

            <div class="form-group">
                <input id="email" type="email" class=" email form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="enter email">
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                        </span>
                @endif
            </div>

            <div class="form-group">
                <input id="password" type="password" class="email form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="enter password">
                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                @endif
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-danger">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>