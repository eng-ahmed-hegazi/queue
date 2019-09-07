{{-- used to display the tags Table --}}
@extends('home');
@section('content')
        @if(count($tags)>0)
            <div class="card bg-dark">
            <h4 class="card-header text-uppercase text-white">
                Tags
            </h4>
            <div class="card-body">
                <table class="table table-hover table-striped">
                    <tr >
                        <th>ID</th>
                        <th>Tag</th>
                        <th class="text-center">EDIT</th>
                        <th class="text-center">TRASH</th>
                    <tr>
                    @foreach($tags as $tag)
                        <tr>
                            <td>{{$tag->id}}</td>
                            <td><span class="glyphicon glyphicon-tag"></span> {{$tag->tag}}</td>
                            <td class="text-center">
                                <a href="{{route('tags.edit',$tag->id)}}">
                                    <span class="fa fa-edit text-primary"></span>
                                </a>
                            </td>
                            <td class="text-center">
                                <form action="{{route('tags.destroy',$tag->id)}}" class="form"
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
                </table>
            </div>
            </div>
        @else
             <div class="card bg-dark">
                 <div class="card-body">
                <div class="alert alert-dismissible" style="background: #1a1a1a">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    No <strong>Tags</strong> Added
                </div>
            </div>
             </div>
        @endif
@endsection