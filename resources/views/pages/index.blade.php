@extends('master')

@section('content')

    <div class="jumbotron">
        <div class="container">
            @if($words!=="none")
                <table class="table table-bordered ">
                    <tr>
                        <th>word</th>
                        <th>type</th>
                        <th>defenition</th>
                        @if(Auth::user())
                        <th>favorit</th>
                            @endif
                    </tr>
                    @foreach($words as $word)
                       <tr>
                           <td>{{$word->word}}</td>
                           <td>{{$word->wordtype}}</td>
                           <td>{{$word->definition}}</td>
                           @if(Auth::user())
                               <td><a class="btn btn-sm btn-success" href="{{url()}}/add/{{$word->id}}">Add</a></td>
                               @endif
                       </tr>
                    @endforeach
                </table>
            @else
        <h1 >welcome to E.A dictionary</h1>
        <p >simple dictionary for E.A members</p>
            <form method="post" action="{{url()}}" class="form-inline">
                {!! csrf_field() !!}
                <div class=" search form-group">
                    <input name="search" type="text" class="form-control input-lg" id="exampleInputName2" placeholder="search">
                </div>
                <button name="submit" type="submit" class="btn btn-success input-lg">search</button>
            </form>
                @endif
        </div>
    </div> <!-- end jumbotron  -->

@stop