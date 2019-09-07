@extends('front')
@section('search')
    <div  class="row"  style="padding:50px">
        <div class="col-lg-12 text-center">
            <img src="{{asset('img/queue.png')}}" alt="" class="img-fluid ">
        </div>
    </div>
    <div class="clearfix"></div>
@endsection
@section('content')
    <div class="row" style="margin: 50px 0">
        <div class="col-lg-9">
            <h4 class="text-white">What is queue.com ?</h4>
            <p style="padding: 20px 0">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa cum doloremque dolores error et
                impedit necessitatibus quaerat, quis reiciendis ullam! Lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Culpa cum doloremque dolores error et impedit necessitatibus quaerat, quis
                reiciendis ullam! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa cum doloremque
                dolores error et impedit necessitatibus quaerat, quis reiciendis ullam! Lorem ipsum dolor sit amet,
                consectetur adipisicing elit. Culpa cum doloremque dolores error et impedit necessitatibus.
            </p>

            <div class="panel-group" id="accordion" >
                <div class="panel panel-default" style="padding: 20px;margin-bottom:10px;background: #1a1a1a;">
                    <div class="panel-heading" style="">
                        <h6 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="text-white">
                                How Could I Reciter in Queue.com
                            </a>
                        </h6>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                    </div>
                </div>
                <div class="panel panel-default" style="padding: 20px;margin-bottom:10px;background: #1a1a1a;">
                    <div class="panel-heading">
                        <h6 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="text-white">
                                what Privacy And Policy of Qeue.com ?
                            </a>
                        </h6>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                    </div>
                </div>
                <div class="card" style="padding: 20px;margin-bottom:10px;background: #1a1a1a;">
                    <div class=card-header">
                        <h6 class="card-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="text-white">
                                What are resons that my disscussion not approved ?
                            </a>
                        </h6>
                    </div>
                    <div id="collapse3" class="card-collapse collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                    </div>
                </div>

                <div class="card" style="padding: 20px;margin-bottom:10px;background: #1a1a1a;">
                    <div class=card-header">
                        <h6 class="card-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="text-white">
                                About Me The Developer
                            </a>
                        </h6>
                    </div>
                    <div id="collapse4" class="card-collapse collapse">
                        <div class="row" style="padding: 35px 0">
                            <div class="col-lg-10">
                                <h4 class="text-white">About The Developer</h4>
                                <div class="row" style="padding: 25px 0;">
                                    <div class="col-lg-4 pull-left">
                                        <img src="{{asset('img/avatar/3.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-lg-8 pull-left">
                                        <h2 class="text-white page-header">Ahmed Hegazy</h2>
                                        <hr>
                                        <h6 class="text-white">
                                            <span class="fa fa-user mr-3"></span>
                                            Name : <span style="font-size: 10px;text-transform: capitalize">Ahmed Moahmmed Abdel Samie</span>
                                        </h6>
                                        <h6 class="text-white">
                                            <span class="fa fa-envelope mr-3"></span>
                                            Email : <span style="font-size: 10px;text-transform: capitalize">ahmeedhegazy214@gmail.com</span>
                                        </h6>
                                        <h6 class="text-white">
                                            <span class="fa fa-phone-square mr-3"></span>
                                            Phone : <span style="font-size: 10px;text-transform: capitalize">(+20) 01117835451</span>
                                        </h6>
                                        <h6 class="text-white">
                                            <span class="fa fa-map-marker mr-3"></span>
                                            Location : <span style="font-size: 10px;text-transform: capitalize">Eygpt / Sohag / Gehana</span>
                                        </h6>
                                        <h6 class="text-white">
                                            <span class="fa fa-facebook mr-3"></span>
                                            Facebook : <span style="font-size: 10px;text-transform: capitalize">
                            <a href="https://www.facebook.com" class="text-white">https://www.facebook.com</a></span>
                                        </h6>
                                        <h6 class="text-white">
                                            <span class="fa fa-github mr-3"></span>
                                            Github : <span style="font-size: 10px;text-transform: capitalize">
                            <a href="https://www.github.com" class="text-white">https://www.github.com</a>
                        </span>
                                        </h6>
                                        <h6 class="text-white">
                                            <span class="fa fa-linkedin mr-3"></span>
                                            Linked In : <span style="font-size: 10px;text-transform: capitalize">
                            <a href="https://www.linkedin.com" class="text-white">https://www.linkedin.com</a>
                        </span>
                                        </h6>
                                        <h6 class="text-white">
                                            <span class="fa fa-behance mr-3"></span>
                                            Bbehance : <span style="font-size: 10px;text-transform: capitalize">
                            <a href="https://www.behance.com" class="text-white">https://www.behance.com</a>
                        </span>
                                        </h6>
                                        <h6 class="text-white">
                                            <span class="fa fa-globe mr-3"></span>
                                            Portfolio : <span style="font-size: 10px;text-transform: capitalize">
                            <a href="https://www.ahmeddesign.com" class="text-white">https://www.ahmeddesign.com</a>
                        </span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <img src="{{asset('img/queue.png')}}" alt="" class="img-fluid">
        </div>
    </div>

@endsection