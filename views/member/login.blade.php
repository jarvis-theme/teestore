<div class="login">
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            {{ Form::open(array('url'=>'member/login','method'=>'post')) }}
                <div class="header-form">
                    <h1>Login</h1>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" value="{{ Input::old('email') }}" autofocus required >
                </div>

                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" required >
                </div>

                <p><a href="{{ url('member/forget-password') }}">Forgot your password?</a></p>

                <div class="form-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-form">Sign In</button>
                    </div>
                </div>
                <p><a href="{{ url('member/create') }}">Create account</a></p>
                <p><a href="{{ url('/') }}">Return to Store</a></p>
            {{ Form::close() }}
        </div>
    </div>
</div>