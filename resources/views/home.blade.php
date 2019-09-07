<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Queue.io</title>
    <!-- Font Awesome -->
    <link href="{{asset('css/fonts.css')}}" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/toastr.min.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{asset('css/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    @yield('style')
</head>
<body class="bg-dark lighten-3">
<!--Main Navigation-->
<header>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg bg-dark text-white white scrolling-navbar">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="navbar-brand waves-effect" href="{{url('/home')}}" target="_blank">
                <strong class="text-white">QUEUE</strong>
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="background: url({{asset('img/icon-menue.png')}}) no-repeat"></span>
            </button>
            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left -->
                <ul class="navbar-nav mr-auto" >
                </ul>
                <ul class="navbar-nav mr-auto topnav" >
                        <li class="nav-item">
                            <a href="{{route('dashboard.index')}}" class="waves-effect text-white text-left">
                               Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.profile.create')}}" class="waves-effect text-white text-left">
                                Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('channels.index')}}" class="waves-effect text-white">
                               Channels
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{route('channels.create')}}" class="waves-effect text-white">
                                Add Channel
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{route('discussions.index')}}" class="waves-effect text-white">
                                Discussions
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{route('tags.index')}}" class="waves-effect text-white">
                               Tags
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{route('tags.create')}}" class="waves-effect text-white">
                                Add Tag
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{route('users.index')}}" class="waves-effect text-white">
                               Users
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{route('settings.index')}}" class="waves-effect text-white">
                                Settings
                            </a>
                        </li>
                </ul>

                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">

                    </li>
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: #fff">
                            {{Auth::guard('admin')->user()->name}}
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu" style="padding: 0;margin: 0;">
                            <li>
                                <a href="{{ route('admin.logout') }}" class="nav-link"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-admin').submit();">
                                    Logout
                                </a>

                                <form id="logout-admin" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed bg-dark">
        <a class="logo-wrapper waves-effect">
            <img src="{{asset('img/queue.png')}}" class="img-fluid" alt="">
        </a>

        <div class="list-group list-group-flush">
            <a href="{{route('dashboard.index')}}" class="list-group-item active waves-effect">
                <i class="fa fa-pie-chart mr-3"></i>Dashboard
            </a>
            <a href="{{route('admin.profile.create')}}" class="list-group-item active list-group-item-action waves-effect">
                <i class="fa fa-user mr-3"></i>Profile</a>
            <a href="{{route('channels.index')}}" class="list-group-item active list-group-item-action waves-effect">
                <i class="fa fa-table mr-3"></i>Channels
            </a>
            <a href="{{route('channels.create')}}" class="list-group-item active list-group-item-action waves-effect">
                <i class="fa fa-plus-square mr-3"></i>Add Channel
            </a>
            <a href="{{route('discussions.index')}}" class="list-group-item active list-group-item-action waves-effect">
                <i class="fa fa-tasks mr-3"></i>Discussions
            </a>
            <a href="{{route('tags.index')}}" class="list-group-item active list-group-item-action waves-effect">
                <i class="fa fa-tags mr-3"></i>Tags
            </a>
            <a href="{{route('tags.create')}}" class="list-group-item active list-group-item-action waves-effect">
                <i class="fa fa-plus mr-3"></i> Add Tag
            </a>
            <a href="{{route('users.index')}}" class="list-group-item active list-group-item-action waves-effect">
                <i class="fa fa-users mr-3"></i>Users
            </a>
            <a href="{{route('settings.index')}}" class="list-group-item active list-group-item-action waves-effect">
                <i class="fa fa-cogs mr-3"></i>Settings
            </a>


            <hr>
            <a href="{{ route('admin.logout') }}" class="list-group-item active list-group-item-action waves-effect"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-admin').submit();">
                <i class="fa fa-sign-out mr-3"></i>Logout</a>
            </a>
            <form id="logout-admin" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>


    </div>
    <!-- Sidebar -->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main class="pt-5 mx-lg-5">
   @yield('content')
</main>
<!--Main layout-->

<!--Footer-->
<footer class="page-footer text-center font-small bg-dark mt-4 wow fadeIn fixed-bottom">
    <hr class="my-4">
    <div class="footer-copyright py-3">
        © 2018 Copyright:
        <a href="#" target="_blank"> Queue.com </a>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
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
<!-- Initializations -->
@yield('script')
<script type="text/javascript">
    // Animations initialization
    new WOW().init();
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
</body>
</html>