<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Login</h4>
            </div>
            <div  class="modal-body">
                <form method="POST" action="{{url()}}/auth/login">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        Email
                        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        Password
                        <input class="form-control" type="password" name="password" id="password">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-lg btn-primary" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Register</h4>
            </div>
            <div  class="modal-body">
                <form method="POST" action="{{url()}}/auth/register">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        Name
                        <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        Email
                        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        Password
                        <input class="form-control" type="password" name="password">
                    </div>

                    <div class="form-group">
                        Confirm Password
                        <input class="form-control" type="password" name="password_confirmation">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-lg btn-primary" type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add your own word to favorit list</h4>
            </div>
            <div  class="modal-body">
                <form method="POST" action="{{url()}}/favorit">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        word
                        <input class="form-control" type="text" name="name" >
                    </div>

                    <div class="form-group">
                        type
                        <input class="form-control" type="text" name="type" >
                    </div>

                    <div class="form-group">
                        definition
                        <textarea class="form-control" type="text" name="definition"></textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-lg btn-primary" type="submit">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>