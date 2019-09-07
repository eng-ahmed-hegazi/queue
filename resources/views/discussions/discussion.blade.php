@extends('front')
@section('content')
    <br><br>
    <div class="card text-white bg-primary " style="box-shadow: 10px 10px 35px rgba(0, 0, 0, 1);padding: 15px">
        <div class="card-header">
            @if($discussion->is_being_watching_by_auth_user())
                <a href="{{route('discussion.unwatch',$discussion->id)}}" class="pull-right" style="color: #fff;"
                   data-toggle="tooltip" data-placement="top" title="You  are watching this discussion!"
                >
                    <span class="fa fa-eye-slash fa-1x text-danger"></span></a>
            @else
                <a href="{{route('discussion.watch',$discussion->id)}}" class="pull-right"
                   data-toggle="tooltip" data-placement="top" title="You  aren't watching this discussion!"
                ><span class="fa fa-eye fa-1x text-success"></span></a>
            @endif

            @if(Auth::id() == $discussion->user->id)
                <a href="{{route('discussion.edit',$discussion->slug)}}" class="pull-right text-white" style="margin-right: 7px">
                    <span class="fa fa-edit fa-1x"></span>
                </a>
                <a data-toggle="modal" data-target="#myModal"  class="pull-right text-white" style="margin-right: 7px">
                    <span class="fa fa-trash fa-1x"></span>
                </a>
            @endif
                <img src="{{$discussion->user->avatar ? asset($discussion->user->avatar) : asset('img/teammember4.png')}}" alt="img" title="img" width="30px" height="35px">
                <span class="text-uppercase">&nbsp;<strong>{{$discussion->user->name}}
                        <small> {{$discussion->created_at->diffForHumans()}}</small>
                </strong>

            </span>
        </div>
        <div class="card-body row">
            <h4 class="card-title col-lg-12">
                {{$discussion->title}}
                <span style="font-size: 9px" class="pull-right">
                    @foreach($discussion->tags as $tag)
                        <span class="fa fa-tag"></span>{{$tag->tag}}
                    @endforeach
                </span>
            </h4>
            <img src="{{asset('img/kk.jpg')}}" alt="" class="img-fluid"><br>
            <div class="col-lg-12"style="padding: 10px 0px">

                <span class="text-capitalize pull-left">
                    <span class="fa fa-folder"></span>
                    {{$discussion->channel->title}}
                </span>
                <span class="text-capitalize pull-right">
                    <span class="mr-1"></span>
                    <span class="fa fa-clock-o"></span>
                      {{$discussion->created_at->diffForHumans()}}
                </span>
                <span class="text-capitalize pull-right">
                    <span class="mr-1"></span>|
                    {{count($discussion->replies)}} <span class="fa fa-comment"></span>
                    <span class="mr-1"></span>|
                    {{$discussion->views}} <span class="fa fa-eye"></span>
                    <span class="mr-1"></span>|
                </span>
                <span class="text-capitalize pull-right">
                    <span class="mr-1"></span>|
                    {{count($discussion->tags)}} <span class="fa fa-tags"></span>
                </span>
            </div>
            <br>
            <p class="card-text">
                {!! Markdown::convertToHtml($discussion->content) !!}
            </p>
        </div>
    </div>
    <br>
    <div class="clearfix"></div><br><br>
    <h2>
        <span class="fa fa-angle-double-right"></span>  Replies
    </h2>
    <div class="clearfix"></div>
    <br>

    @if($best_answer)
        <div class="bg-primary text-white text-uppercase" style="padding: 5px 25px;font-size: 20px">
            <span class="fa fa-trophy text-warning"></span> <strong>best answer</strong>
        </div>
        <div class="media bg-primary" style="padding: 15px">
            <div class="media-left">
                <img src="{{$best_answer->user->avatar ? asset($best_answer->user->avatar) : asset('img/teammember4.png')}}" class="media-object" style="width:60px;padding-right: 10px">

            </div>
            <div class="media-body">
                <h4 class="media-heading">
                    {{$best_answer->user->name}}


                </h4>
                <span class="fa fa-clock-o"><i> {{$best_answer->created_at->diffForHumans()}} ( {{$best_answer->user->points}} )</i></span>
                <p>
                {!! Markdown::convertToHtml($best_answer->content) !!}
                </p>
                <div class="row pull-right" style="padding: 10px">
                    @if($best_answer->is_likes_by_auth_user())
                        <span class="badge  badge-primary" style="font-size: 15px">{{$best_answer->likes->count()}}</span>
                        <a href="{{route('reply.unlike',$best_answer->id)}}">
                            <span class="fa fa-thumbs-down text-white fa-2x"></span>
                        </a>
                    @else
                        <span  class="badge badge-primary" style="font-size: 15px">{{$best_answer->likes->count()}}</span>
                        <a href="{{route('reply.like',$best_answer->id)}}">
                            <span class="fa fa-thumbs-up text-white fa-2x"></span>
                        </a>
                    @endif
                </div>
            </div>

        </div><br>
    @endif
    @foreach($discussion->replies as $replay)
        @if($replay->likes->max())
        <div class="bg-primary text-white text-uppercase" style="padding: 5px 25px;font-size: 20px">
            <span class="fa fa-trophy text-warning"></span> <strong>best answer</strong>
        </div>
     @endif
 <div class="media bg-primary" style="padding: 15px;">
     <div class="media-left">
         <img src="{{asset($replay->user->avatar) }}" class="media-object" style="width:60px;padding-right: 10px;border-radius: 50%">

     </div>
     <div class="media-body">
         <h4 class="media-heading">
             {{$replay->user->name}}
         </h4>
         <span class="fa fa-clock-o"><i> {{$replay->created_at->diffForHumans()}} ( {{$replay->user->points}} )</i></span>
         <p class="text-white">
         {!! Markdown::convertToHtml($replay->content) !!}
         </p>
         <div class="row pull-right" style="padding: 10px">
             @if(Auth::user())
                 @if($replay->is_likes_by_auth_user())
                     <span class="badge  badge-primary" style="font-size: 15px">{{$replay->likes->count()}}</span>
                     <a href="{{route('reply.unlike',$replay->id)}}">
                         <span class="fa fa-thumbs-down text-white fa-2x text-danger"></span>
                     </a>
                 @else
                     <span  class="badge badge-primary" style="font-size: 15px;padding-top: 9px">{{$replay->likes->count()}}</span>
                     <a href="{{route('reply.like',$replay->id)}}">
                         <span class="fa fa-thumbs-up text-white fa-2x text-info"></span>
                     </a>
                 @endif
             @else
                 <span  class="badge badge-primary" style="font-size: 15px;padding-top: 9px">{{$replay->likes->count()}}</span>
                 <a disabled="disabled">
                     <span class="fa fa-thumbs-up text-white fa-2x text-info"></span>
                 </a>
             @endif

         </div>
     </div>
 </div><br>

@endforeach
 @if(isset(Auth::user()->id))
     <div class="panel panel-default" style="padding: 15px 0">
         <div class="panel panel-body">
             <form action="{{route('discussion.reply',$discussion->id)}}" class="form" method="post">
                 {{csrf_field()}}
                 <div class="form-group">
                     <h6 for="content" class="card-header">
                         <span class="fa fa-angle-double-right"></span>Leave Reply
                     </h6>
                     <textarea name="content" id="content" cols="30" rows="10" placeholder="enter comment" class="form-control" style="background: #0d0d0d"></textarea>
                 </div>
                 <div class="form-group">
                     <button class="btn btn-success" type="submit">
                         Leave Comment
                     </button>
                 </div>
             </form>
         </div>
     </div>
 @else
     <div class="card bg-primary ">
         <div class="card-header">
             Login to leave comment <a href="{{route('login')}}" class="btn btn-link text-white">Login</a>
         </div>
     </div><br>
 @endif
@endsection
<script>
 $(document).ready(function(){
     $('[data-toggle="tooltip"]').tooltip();
 });
</script>
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