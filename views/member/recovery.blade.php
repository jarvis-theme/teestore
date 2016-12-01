<div class="row">
    <div class="col-xs-12 col-sm-6">
        {{ Form::open(array('url' => 'member/recovery/'.$id.'/'.$code, 'method' => 'post')) }} 
            <div class="header-form">
                <h1 class="form-title">Reset Password</h1>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="New Password" autofocus required >
            </div>
            <div class="form-group">
                <input type="password" name="password_confirmation" placeholder="Confirm New Password" required >
            </div>
            <div class="form-group">
                <div class="controls">
                    <button type="submit" class="btn btn-form">Save</button>
                </div>
            </div>
            <p><a href="{{ url('/') }}">Return to Store</a></p>
        {{ Form::close() }} 
    </div>
</div>