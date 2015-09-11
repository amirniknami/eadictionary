@extends('master')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <table class="table table-bordered">
                <tr>
                    <th>word</th>
                    <th>type</th>
                    <th>definition</th>
                    <th>delete</th>
                </tr>



                            @foreach($favs as $fav)
                    <tr>
                                <td>{{$fav->name}}</td>
                                <td>{{$fav->type}}</td>
                                <td>{{$fav->definition}}</td>
                                <td><a class="btn btn-sm btn-danger" href="{{url()}}/delete/{{$fav->id}}">delete</a></td>
                    </tr>
                            @endforeach

            </table>
            <div class="center">{!! $favs->render() !!}</div>

        </div>
    </div>
@stop