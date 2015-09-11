<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button  type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url()}}">E.A DICTIONARY</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            @if(Auth::user())
                <p class="navbar-text">Welcome Dear {{ucfirst(Auth::user()->name)}}</p>
                @else
                <p class="navbar-text" >Welcome Guest</p>
            @endif
        <form method="post" action="{{url()}}" class="navbar-form navbar-right" role="search">
            {!! csrf_field() !!}
            <div class="form-group">
                <input name="search" type="text" class="form-control" placeholder="Search">
            </div>
            <button name="submit" type="submit" class="btn btn-success">Search</button>
        </form>
            @if(Auth::user())
                    <form  action="{{url()}}/auth/logout" class="navbar-form navbar-right" role="search">
                            {!! csrf_field() !!}
                            <button name="submit" type="submit" class="btn btn-danger">Logout</button>
                        @if(!isset($yes))
                        <a class="btn btn-danger" href="{{url()}}/favorit">Favorit</a>
                            @endif
                    </form>
                        @if(isset($yes))
                            <div class="navbar-form navbar-right">
                    <button  class="btn btn-danger" data-toggle="modal" data-target="#add">Add</button>
                            </div>
                            @endif
            @else
                <div class="navbar-form navbar-right" role="search">
                    {!! csrf_field() !!}
                    <button name="submit" type="submit" class="btn btn-danger" data-toggle="modal" data-target="#login">Login</button>
                    <button name="submit" type="submit" class="btn btn-danger" data-toggle="modal" data-target="#register">Register</button>
                </div>
            @endif
            </div>
        <!-- end collapse -->
    </div>
</nav>

@include('partial.modal')
