<div class="row">
    <div class="col-xs-12 col-sm-6">
        {{ Form::open(array('url' => 'member/forgetpassword','method'=>'post')) }}
            <div class="header-form">
                <h1>Reset your password</h1>
            </div>
            <p>We will send you an email to reset your password.</p>
            <div class="form-group">
                <input type="email" name="recoveryEmail" placeholder="Email" value="{{ Input::old('recoveryEmail') }}" autofocus required>
            </div>
            <p><button type="submit" class="btn btn-form">Submit</button></p>
            <p><input type="reset" class="cancel" value="Cancel"></p>
            <a href="{{ url('/') }}">Return to Store</a>
        {{ Form::close() }}
    </div>
</div>