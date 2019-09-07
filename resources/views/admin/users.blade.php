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
                            @if(count($users) > 0)
                            <thead style="background: #1a1a1a">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <!-- Table head -->

                            <!-- Table body -->
                            <tbody>

                                @foreach($users as $user)
                                    <tr>
                                        <th scope="row">{{$user->id}}</th>
                                        <td class="text-capitalize">{{$user->name}} </td>
                                        <td class="text-capitalize">{{$user->email}} </td>
                                        <td>
                                            <form action="{{route('user.destroy',$user->id)}}" class="form"
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
                                <tr>Their Are No Users</tr>
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
        <!--Grid row-->
    </div>
@endsection