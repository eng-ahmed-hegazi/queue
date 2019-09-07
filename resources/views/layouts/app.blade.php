<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/atom-one-dark.min.css')}}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto navbar-right" >
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="nav-item dropdown ">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
<div class="container">
    <div class="col-lg-3">

        <a href="{{route('discussion.create')}}" class="btn btn-primary btn-block">CREATE DISCUSSION</a><br>
        <ul class="list-group">
            <li class="list-group-item text-uppercase"><a href="/forum" class="">HOME</a></li>
            <li class="list-group-item text-uppercase"><a href="/forum?filter=me" class="">MY DISCUSSIONS</a></li>
            <li class="list-group-item text-uppercase"><a href="/forum?filter=solved" class="">SOLVED DISCUSSIONS </a></li>
            <li class="list-group-item text-uppercase"><a href="/forum?filter=unsolved" class="">UNSOLVED DISCUSSION</a></li>
        </ul>

        <ul class="list-group">
            @if(Auth::check())
                @if(Auth::user()->admin)
                    <li class="list-group-item text-uppercase"><a href="{{route('channels.index')}}" class="">ALL CHANNELS</a></li>
                @endif
            @endif

        </ul>
        <div class="panel panel-default">
            <div class="panel-heading">
                CHANNELS
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    @foreach($channels as $channel)
                        <li class="list-group-item text-uppercase">
                            <a href="{{route('channel',$channel->slug)}}" style="text-decoration: none">
                                {{$channel->title}} <span class="badge pull-right">{{$channel->discussions->count()}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-9">
        @yield('content')
    </div>
</div>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>
    <script src="js/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script>
        @if(Session::has('success'))
        toastr.success("{{Session::get('success')}}");
        @endif

        @if(Session::has('info'))
        toastr.info("{{Session::get('info')}}");
        @endif
    </script>
</body>
</html>
