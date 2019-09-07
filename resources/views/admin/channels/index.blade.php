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
                            <thead style="background: #1a1a1a">
                            <tr>
                                <th>#</th>
                                <th>Channel</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <!-- Table head -->

                            <!-- Table body -->
                            <tbody>
                            @foreach($channels as $channel)
                                <tr>
                                    <th scope="row">{{$channel->id}}</th>
                                    <td class="text-capitalize">{{$channel->title}} </td>
                                    <td>
                                        <a href="{{route('channels.edit',$channel->id)}}" class="">
                                            <span class="fa fa-edit text-info"></span>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{route('channels.destroy',$channel->id)}}" class="form"
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
                            <!-- Table body -->
                        </table>
                        <!-- Table  -->
                    </div>
                </div>
                <!--/.Card-->
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
@endsection
