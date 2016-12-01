<div class="row">
    <div class="col-xs-12 col-sm-6">
        {{ Form::open(array('url'=>'member','method'=>'post')) }} 
            <div class="header-form">
                <h1 class="form-title">Create Account</h1>
            </div>
            <div class="form-group">
                <input type="text" name="nama" placeholder="Nama" value="{{ Input::old('nama') }}" autofocus required >
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" value="{{ Input::old('email') }}" required >
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required >
            </div>
            <div class="form-group">
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required >
            </div>
            <div class="form-group">
                <textarea name="alamat" placeholder="Addresss">{{ Input::old("alamat") }}</textarea>
            </div>
            <div class="form-group">
                <div class="controls" >
                    {{ Form::select('negara', array('' => '-- Choose Country --') + $negara, Input::old('negara'), array('required', 'id="negara" data-rel="chosen"')) }} 
                </div>
            </div>
            <div class="form-group">
                <div class="controls" id="provinsiPlace">
                    {{ Form::select('provinsi', array('' => '-- Choose Province --'), Input::old("provinsi"), array('required', 'id="provinsi" data-rel="chosen"')) }} 
                </div>
            </div>
            <div class="form-group">
                <div class="controls" id="kotaPlace">
                    {{ Form::select('kota', array('' => '-- Choose City --'), Input::old("kota"), array('required'=>'', 'id'=>'kota')) }} 
                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    <input type="text" name="kodepos" placeholder="Postal Code" value="{{ Input::old('kodepos') }}" >
                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    <input type="text" name="telp" placeholder="Phone" value="{{ Input::old('telp') }}" required >
                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    {{ HTML::image(Captcha::img(), 'Captcha image', array('class'=>'captcha')) }} 
                    <div class="col-xs-12 col-sm-9 nopadding">
                        {{ Form::text('captcha', '', array('placeholder'=>'Security Code')) }} 
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="readme" value="1"> I agree to the <a href="{{ URL::to('service') }}" target="_blank">Terms of Use and Privacy Statement</a>.
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    <button type="submit" class="btn btn-form">Create</button>
                </div>
            </div>
            <p><a href="{{ url('/') }}">Return to Store</a></p>
        {{Form::close()}} 
    </div>
</div>