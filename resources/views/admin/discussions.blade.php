@extends('home')
@section('content')
    <div class="container-fluid mt-5" style="padding-bottom: 50px">
        <!--Grid row-->
        <div class="row wow fadeIn">
            <!--Grid column-->
            <div class="col-md-12 mb-4">
                <!--Card-->
                <div class="card bg-dark text-white">
                    <!--Card content-->
                    <div class="card-body">
                        <!-- Table  -->
                        <table class="table table-hover bg-dark">
                            <!-- Table head -->
                            @if(count($discussions) > 0)
                                <thead style="background: #1a1a1a">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Approval</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <!-- Table head -->

                                <!-- Table body -->
                                <tbody>

                                @foreach($discussions as $discussion)
                                    <tr>
                                        <th scope="row">{{$discussion->id}}</th>
                                        <td class="text-capitalize">{{str_limit($discussion->title,20)}} </td>
                                        <td class="text-capitalize">{{str_limit($discussion->content,30)}} </td>
                                        <td class="text-capitalize">
                                            @if($discussion->approval == 1)
                                                <a href="{{route('discussion.reject',$discussion->id)}}" class="btn btn-danger btn-sm">
                                                    <span class="fa fa-trash"></span> Remove Approval
                                                </a>
                                            @else
                                                <a href="{{route('discussion.accept',$discussion->id)}}" class="btn btn-success btn-sm">
                                                    <span class="fa fa-plus"></span> Accept Approval
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{route('discussion.delete',$discussion->id)}}" class="form"
                                                  method="POST">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                                <button type="submit" style="background: none;border: 0;cursor: pointer">
                                                    <span class="fa fa-trash text-danger"></span>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            @else
                                <tbody>
                                <tr>Their Are No Discussions</tr>
                                </tbody>
                        @endif
                        <!-- Table body -->
                        </table>
                        <!-- Table  -->
                    </div>
                </div>
                <!--/.Card-->
            </div>
            <!--Grid column-->
        </div>
        <div class="row" style="padding-bottom: 35px">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 text-center">
                {{ $discussions->links('pagination') }}
            </div>
        </div>
        <!--Grid row-->
    </div>
@endsection