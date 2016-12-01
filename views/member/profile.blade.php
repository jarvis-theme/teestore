<div class="row">
    <div class="col-xs-12 col-sm-12">
        <div class="header-form">
            <h1 class="form-title">My Account</h1>
        </div>
        <p><a href="{{ url('member/profile/edit') }}">Return to Account Details</a></p>
        <br>
        <h2>Your Addresses</h2>
        <h3>{{ @$user->nama }}</h3>
        <p>
            <br>
            {{ !empty($user->alamat) ? $user->alamat.'<br>' : '' }}
            {{ !empty($user->kodepos) ? $user->kodepos.'<br>' : '' }}
            @if(!empty($user->telp) && !empty($user->hp))
                {{ $user->telp.' / '.$user->hp }}
            @elseif(!empty($user->telp) && empty($user->hp))
                {{ $user->telp }}
            @elseif(empty($user->telp) && !empty($user->hp))
                {{ $user->hp }}
            @endif
        </p>
        <p>
            <a href="#address" id="toggle-address">Edit Address</a> | <a href="#password" id="toggle-password">Edit Password</a>
        </p>

        {{ Form::open(array('url'=>'member/update','method'=>'put','class'=>'update-address','id'=>'address','style'=>'display: none;')) }} 
            <hr>
            <h4>Edit Address</h4>
            <div class="col-xs-12 col-sm-6 form1">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="nama" value="{{ $user->nama }}" placeholder="Name" required >
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}" placeholder="Email" required >
                </div>
                <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" class="form-control" name="telp" value="{{ $user->telp }}" placeholder="Telepon" required >
                </div>
                <div class="form-group">
                    <label>Postal Code</label>
                    <input type="text" class="form-control" placeholder="Postal Code" name="kodepos" value="{{ $user->kodepos }}" required >
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" rows="3" placeholder="Address" name="alamat" required>{{ $user->alamat }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 form2">
                <div class="form-group">
                    <label>Country</label>
                    {{ Form::select('negara',array('' => '-- Choose Country --') + $negara, ($user ? $user->negara :(Input::old("negara")? Input::old("negara") :"")), array('required'=>'', 'id'=>'negara', 'class'=>'form-control')) }}
                </div>
                <div class="form-group">
                    <label>Province</label>
                    {{ Form::select('provinsi',array('' => '-- Choose Province --') + $provinsi, ($user ? $user->provinsi :(Input::old("provinsi")? Input::old("provinsi") :"")),array('required'=>'','id'=>'provinsi', 'class'=>'form-control')) }}
                </div>
                <div class="form-group">
                    <label>City</label>
                    {{ Form::select('kota',array('' => '-- Choose City --') + $kota, ($user ? $user->kota :(Input::old("kota")? Input::old("kota") :"")),array('required'=>'','id'=>'kota', 'class'=>'form-control')) }}
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
                <button type="submit" class="btn btn-form">Save</button>
            </div>
            <p><a class="cancel-form" href="#">Cancel</a></p>
        {{ Form::close() }} 

        {{ Form::open(array('url'=>'member/update','method'=>'put','class'=>'update-password','id'=>'password','style'=>'display: none;')) }} 
            <hr>
            <h4>Edit Password</h4>
            <div class="col-xs-12 col-sm-6 nopadding">
                <div class="form-group">
                    <label>Old Password</label>
                    <input type="password" class="form-control" name="oldpassword" placeholder="Old Password" >
                </div>
                <div class="form-group">
                    <label>New Password</label>
                    <input type="password" class="form-control" name="password" placeholder="New Password" >
                </div>
                <div class="form-group">
                    <label>Confirm New Password</label>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm New Password" >
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-form">Save</button>
                </div>
                <p><a class="cancel-form" href="#">Cancel</a></p>
            </div>
        {{ Form::close() }} 
    </div>
</div>