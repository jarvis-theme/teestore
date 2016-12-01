<div class="row-fluid">
    <div class="center">
        <h1>Contact Us</h1>
        <hr>
    </div>
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-6">
        @if($kontak->alamat!='')
            <address>
                <b>{{$kontak->nama}}</b><br/>
                <i class="fa fa-map-marker"></i> {{$kontak->alamat}}<br/>
                <i class="fa fa-phone-square"></i> {{$kontak->telepon}}<br/>
            </address>
        @else
            <div></div>
        @endif

            <div class="block">
                <form action="{{ URL::to('kontak') }}" method="post">
                    <p><strong>Leave a message</strong></p>
                    <div class="form-group">
                        <input type="text" name="namaKontak" value="{{ Input::old('namaKontak') }}" placeholder="Name" required />
                    </div>
                    <div class="form-group">
                        <input type="email" name="emailKontak" value="{{ Input::old('emailKontak') }}" placeholder="Email" required />
                    </div>
                    <div class="form-group">
                        <textarea name="messageKontak" placeholder="Message" rows="3" required>{{ Input::old('messageKontak') }}</textarea>
                    </div>
                    <div class="form-group">
                        <button name="submit" type="submit" class="btn btn-form">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            @if($kontak->lat=='0' || $kontak->lat=='0')
                <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->lat.','.$kontak->lng }}&amp;aq=&amp;sll={{ $kontak->lat.','.$kontak->lng }}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;t=m&amp;z=14&amp;output=embed"></iframe><br />
            @else
                <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->alamat }}&amp;aq=0&amp;oq={{ str_replace(' ','+',$kontak->alamat) }}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;hq=&amp;hnear={{ str_replace(' ','+',$kontak->alamat) }}&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
            @endif
        </div>
    </div>
</div>