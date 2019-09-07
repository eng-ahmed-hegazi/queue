@extends('front')
    @section('search')
            <div class="row search">
                <div class="col-lg-12 text-center">

                        
                    <img src="{{asset('img/queue.png')}}" alt="" class="img-fluid ">
                    <h4 class="stat">
                        <span class="stat-count badge">{{$settings->vistores}}
                            <span class="mr-3"></span>
                        </span><span class="fa fa-user"></span>
                        <span>Vistores</span>
                        <div class="mr-5">
                    </h4>

                    
                    <form action="{{route('search.single')}}" method="post">
                        {{csrf_field()}}
                        <br><br>
                    </span>
                        <h1 class="search-span">SEARCH IN OUR WEBSITE</h1>
                        <div class="search-wrapper">
                            <div class="input-holder">
                                <input type="text" class="search-input" placeholder="Type to search" name="query"/>
                                <button class="search-icon" onclick="searchToggle(this, event);"><span></span></button>
                            </div>
                            <span class="close" onclick="searchToggle(this, event);"></span>
                        </div>
                    </form>

                </div>
            </div>
        <div class="clearfix"></div>

    @endsection

    @section('content')
    <h1 class="page-header" style="padding: 25px 0;color: #ddd">
        <span class="fa fa-angle-double-right"></span><span>Top Questions</span>
    </h1>
    <div class="row">
        @foreach($discussions as $discuss)
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 20px">
            <div class="card text-white bg-primary" style="max-width: 20rem;">
                <div class="card-header">
                    <h6 style="color: #fff;height: 10px">
                        {{$discuss->title}}
                    </h6>
                </div>
                <div class="card-body">
                    <div class="contain">
                        <img src="{{asset('img/img.png')}}" alt="" class="img-fluid image" width="250">
                        <div class="middle">
                            <div class="text text-uppercase">{{$discuss->channel->title}}</div>
                        </div>
                    </div>
                    <p>{{str_limit($discuss->content,70)}}</p>
                    <a href="{{route('discussion.show',$discuss->slug)}}" style="color: #fff;" class="pull-right">
                        <strong>More <span class="fa fa-angle-double-right"></span></strong>
                    </a>
                </div>
                <div class="card-footer">
                    <span class="stat">
                        <span class="stat-count">{{count($discuss->replies)}}</span><span class="fa fa-comment"></span> 
                        <span class="stat-count">{{$discuss->views}}</span><span class="fa fa-eye"></span> 
                    </span>
            
                    <span class="pull-right">
                        <span class="fa fa-clock-o mr-1"></span> {{$discuss->created_at->diffForHumans()}}
                    </span>
                </div>
            </div>
        </div>
       @endforeach
    </div>

    @endsection

    @section('register')

    <div class="row" style="padding: 25px;">

        <div class="list-group col-lg-3">
            <h1 class="page-header" style="padding: 20px 0">
                <span class="fa fa-angle-double-right"></span>
                Menue
            </h1>
            <a class="list-group-item list-group-item-action active" href="{{route('channels')}}">Channels</a>
            <a class="list-group-item list-group-item-action active" href="{{route('discussion.close')}}" >Closed Discussion</a>
            <a class="list-group-item list-group-item-action active" href="{{route('discussion.open')}}" >Opened Discussion</a>
            <a class="list-group-item list-group-item-action active" href="{{route('discussion.watched')}}" >Watched Discussions</a>
            <a class="list-group-item list-group-item-action active" href="{{route('discussion.recent')}}" >Recent Discussion</a>
            <a class="list-group-item list-group-item-action active" href="{{route('discussion.create')}}" >Add Discussion</a>
            <a class="list-group-item list-group-item-action active" href="{{route('discussion.tags')}}" >Tags</a>
            <a class="list-group-item list-group-item-action active" href="{{route('discussion.users')}}" >Users</a>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-8">
            <h1 class="page-header" style="padding: 20px 0">
                <span class="fa fa-angle-double-right"></span>
                Register
            </h1>
            <div class="row">
                <div class="col-lg-6 pull-right">
                    <button type="button" class="btn btn-info">Register with facebook</button>
                    <hr>
                </div>

                <div class="col-lg-6 col-md-12 pull-left">
                    <button type="button" class="btn btn-danger">Register with google+</button>
                </div>
            </div>
            <form method="POST" action="{{ route('register') }}" class="col-lg-12">
                @csrf
                <div class="form-group row">
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} email" name="name" placeholder="Enter Username" value="{{ old('name') }}" required>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group row">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} email" name="email" placeholder="Enter E-mail" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                </div>

                <div class="form-group row">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} email" name="password" placeholder="Enter Password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group row">
                    <input id="password-confirm" type="password" class="form-control email" name="password_confirmation" placeholder="Enter Re-password"  required>
                </div>

                <div class="form-group row">
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>
            </form>
        </div>

    </div>

    @endsection
    

