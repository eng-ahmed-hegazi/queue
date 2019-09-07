<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Queue.com</title>
</head>
<!--style tags-->
<link rel="stylesheet" href="{{asset('css/lux.min.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/toastr.min.css')}}" >
<link rel="stylesheet" href="{{asset('css/fonts.css')}}">
<style>
    body{
        background: #212129;
        overflow-x: hidden;
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
    .reg{
        background: #101014;
        height: 2px;
    }
    h4,h1,h2,h5{
        color: #fff
    }

</style>
<body>
<!--navbar starts here-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top" style="padding: 10">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01" style="padding: 0">
            <ul class="navbar-nav text-center">
                <li class="nav-item navitem">
                    <a class="nav-link " href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item navitem">
                    <a class="nav-link" href="{{route('channels')}}">Channels</a>
                </li>

                <li class="dropdown text-center navitem" style="padding: 2px">
                    <a class="dropdown-toggle nav-link " data-toggle="dropdown" href="#" >Discussions
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu bg-primary col-lg-12" style="text-align: left;border:0">
                        <li class="navitem text-lg-left" style="margin: 0;padding: 2px">
                            <a class="nav-link" href="{{route('discussion.close')}}" >Closed Discussion</a>
                        </li>
                        <li class="navitem text-lg-left " style="margin: 0;padding: 2px">
                            <a class="nav-link" href="{{route('discussion.open')}}" >Opened Discussion</a>
                        </li>
                        <li class="navitem text-lg-left " style="margin: 0;padding: 2px">
                            <a class="nav-link" href="{{route('discussion.watched')}}" >Watched Discussions</a>
                        </li>
                        <li class="navitem text-lg-left " style="margin: 0;padding: 2px">
                            <a class="nav-link" href="{{route('discussion.recent')}}" >Recent Discussion</a>
                        </li>
                        <li class="navitem text-lg-left " style="margin: 0;padding: 2px">
                            <a class="nav-link" href="{{route('discussion.create')}}" >Add Discussion</a>
                        </li>
                    @if(Auth::user())
                            <li class="navitem text-lg-left" style="margin: 0;padding: 2px">
                                <a class="nav-link" href="{{route('discussion.my')}}" >My Discussion</a>
                            </li>
                        @endif
                    </ul>
                </li>
                {{--

                --}}
                <li class="nav-item navitem">

                </li>

                <li class="nav-item navitem">
                    <a class="nav-link" href="{{route('discussion.tags')}}" >Tags</a>
                </li>

                <li class="nav-item navitem">
                    <a class="nav-link" href="{{route('discussion.users')}}" >Users</a>
                </li>

                <li class="nav-item navitem">
                    <a class="nav-link" href="{{route('about')}}" >About Us</a>
                </li>

                <li class="nav-item navitem">
                    <a class="nav-link" href="{{route('contact')}}" >Contact Us</a>
                </li>

                @if(Auth::user())
                    <li class="nav-item navitem">
                        <a href="{{ route('logout') }}" class="nav-link"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    <li class="nav-item navitem">
                        <a href="{{route('profile.create')}}" class="nav-link bg-dark">
                            <span class="fa fa-user"></span> {{Auth::user()->name}}
                        </a>
                    </li>
                @else
                    <li class="nav-item navitem" > <a class="nav-link" href="{{route('login')}}">Login</a></li>
                    <li class="nav-item navitem" ><a class="nav-link" href="{{route('register')}}">Register</a></li>
                @endif

            </ul>
        </div>
    </div>
</nav>
<!--navbar ends here-->
@yield('search')
<div class="container">
@yield('content')
@yield('register')
</div>
<div class="container-fluid">
    <div class="row" style="background: #1a1a1a">
        <div class="container ">
            <div class="row" style="padding: 20px">
                <div class="col-lg-4">
                    <h2 class="page-header" style="padding: 10px 0 ">
                        Menue
                    </h2>
                    <ul class="list-unstyled" >
                        <li><a href="#" style="color: #fff">Home</a></li>
                        <li><a href="#" style="color: #fff">Open Discussion</a></li>
                        <li><a href="#" style="color: #fff">Closed Discussion</a></li>
                        <li><a href="#" style="color: #fff">Watched Discussion</a></li>
                        <li><a href="#" style="color: #fff">Users</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h2 class="page-header" style="padding: 10px 0 ">
                        Other
                    </h2>
                    <ul class="list-unstyled" >
                        <li><a href="#" style="color: #fff">Contact Us</a></li>
                        <li><a href="#" style="color: #fff">About Us</a></li>
                        <li><a href="#" style="color: #fff">Privait & Policy</a></li>
                        <li><a href="#" style="color: #fff">Join To Queue Team</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <img src="{{asset('img/queue.png')}}" height="150px" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="background: #111111;height: 50px">
        <div class="col-lg-12 text-center">
            Copy rights reserved for <strong>queue.com</strong>
        </div>

    </div>
    <div class="row fixed-bottom slinks" style="background: #111111;height: 25px">
            <span style="background: #3a5799;padding: 2px 0px;line-height: 20px" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center">
                <a href="" style="color: #fff">
                    <span class="fa fa-facebook-square"></span>
                </a>
                <a href="" style="color: #fff" class="word">Facebook</a>
            </span>
            <span style="background: #0085b9;padding: 2px 0px;line-height: 20px" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center">
                <a href="" style="color: #fff">
                    <span class="fa fa-twitter-square"></span>
                </a>
                <a href="" style="color: #fff" class="word">Twitter</a>
            </span>
            <span style="background: #de4437;padding: 2px 0px;line-height: 20px" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center">
                <a href="" style="color: #fff">
                    <span class="fa fa-google-plus-square"></span>
                </a>
                <a href="" style="color: #fff" class="word">Google +</a>
            </span>
            <span style="background: #2b2b2b;padding: 2px 0px;line-height: 20px" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center">
                <a href="" style="color: #fff">
                    <span class="fa fa-github-square"></span>
                </a>
                <a href="" style="color: #fff" class="word">Github</a>
            </span>
            <span style="background: #7c079a;padding: 2px 0px;line-height: 20px" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center">
                <a href="" style="color: #fff">
                    <span class="fa fa-yahoo"></span>
                </a>
                <a href="" style="color: #fff" class="word">Yahoo</a>
            </span>
            <span style="background: #721c24;padding: 2px 0px;line-height: 20px" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center">
                <a href="" style="color: #fff">
                    <span class="fa fa-youtube-square"></span>
                </a>
                <a href="" style="color: #fff" class="word">Youtube </a>
            </span>

    </div>
</div>

<!--scripts tags-->
<script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
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
<script type="text/javascript">
    function searchToggle(obj, evt){
        var container = $(obj).closest('.search-wrapper');
        if(!container.hasClass('active')){
            container.addClass('active');
            evt.preventDefault();
        }
        else if(container.hasClass('active') && $(obj).closest('.input-holder').length == 0){
            container.removeClass('active');
            // clear input
            container.find('.search-input').val('');
        }
    }
</script>
<script type="text/javascript">
    function getFile(){
        document.getElementById("upfile").click();
    }
    function sub(obj){
        var file = obj.value;
        var fileName = file.split("\\");
        document.getElementById("yourBtn").innerHTML = fileName[fileName.length-1];
        document.myForm.submit();
        event.preventDefault();
    }
</script>
<script>
    $(function() {
        $('.the-toggler').on('click', function () {
            $('.navbar').slideToggle();
        });
    });

// Counter
    jQuery(document).ready(function() {
        function count($this){
            var current = parseInt($this.html(), 10);
                $this.html(++current);
                    if(current > $this.data('count')){
                $this.html($this.data('count'));
                } else {
                setTimeout(function(){count($this)}, 20);
                }
            }

            jQuery(".stat-count").each(function() {
            jQuery(this).data('count', parseInt(jQuery(this).html(), 10));
            jQuery(this).html('0');
            count(jQuery(this));
        });
    });
    </script>
</body>
</html>