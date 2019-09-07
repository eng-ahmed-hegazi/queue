@extends('front')
@section('search')
    <div class="row ">
        <div class="col-lg-12 text-center">
            <img src="{{asset('img/queue.png')}}" alt="" class="img-fluid img">
        </div>
    </div>
@endsection
@section('content')
    <div style="padding: 25px">
        <h2 class="page-header text-center" style="padding-bottom: 20px">
            <span class="fa fa-angle-double-right"></span>
            Login
            <span class="fa fa-angle-double-left"></span>

        </h2>
        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-3  text-uppercase">
                <span style="font-size: 15px">If you do'nt have email register from</span>
                <a class="btn btn-link text-muted" href="{{ route('register') }}">
                    <strong> here</strong>
                </a>
            </div>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label text-md-right"></label>
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} email" name="email" value="{{ old('email') }}" placeholder="enter email address" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-3 col-form-label text-md-right"></label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} email" name="password" placeholder="enter password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-5 offset-md-3">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-3">
                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>

                    <a class="btn btn-link text-muted" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
                </div>
            </div>
        </form>
    </div>

@endsection
