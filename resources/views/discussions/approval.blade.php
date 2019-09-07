@extends('front')
@section('content')
    <div class="card" style="border: 0;margin: 20px 0">
        <h4 class="card-header text-white text-center" style="background: #212129;border: 0">
            Your Discussion Has been Send To The Admin Wait Until The Approval
        </h4>
    </div>
    <div class="row " style="padding: 25px 0">
        <div class="col-lg-2"></div>
        <div style="height:250px;width:60%;background: url({{asset('img/marketing.png')}}) no-repeat;background-size: contain">
        </div>
    </div>
    <div>
        <a data-toggle="modal" data-target="#myModal"  class="pull-right text-white" style="margin-right: 7px;cursor: pointer">
            <span class="fa fa-trash fa-1x mr-3"></span>Delete Discussion
        </a>
        <a href="{{route('discussion.edit',$discussion->slug)}}" class="pull-right text-white" style="margin-right: 7px">
            <span class="fa fa-edit fa-1x mr-3"></span>Edit Discussion
        </a>
    </div>
    <!-- Modal -->
    <div class="modal fade " id="myModal" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content bg-primary">
                <div class="modal-header bg-danger" style="border-bottom: 1px solid #111111">
                    <h4 class="modal-title">Warning</h4>
                    <button type="button" class="close pull-right text-white" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" style="border-bottom: 1px solid #111111">
                    <p class="text-danger text-uppercase">Are Yuo Sure ?<br>
                        <small class="text-white text-uppercase">Your Discussion will be deleted !</small>
                    </p>
                    <button type="button" class="btn btn-dark btn-xs pull-left" data-dismiss="modal">Close</button>
                    <a href="{{route('discussion.destroy',$discussion->id)}}" type="button" class="btn btn-danger btn-xs pull-right">Yes Delete</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
@endsection