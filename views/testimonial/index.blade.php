<div class="center">
    <h1>Testimonial</h1>
    <hr>
</div>
<div class="row-fluid">
    <div class="col-xs-12 col-sm-8">
        @foreach(list_testimonial() as $key=>$value)
        <article class="testimonial">
            <h2>{{ $value->nama }}</h2>
            <p><small class="date"><i class="fa fa-calendar"></i> {{waktuTgl($value->created_at)}}</small></p>
            <p>{{ short_description($value->isi,400) }}</p>
        </article>
        @endforeach
        {{ list_testimonial()->links() }} 
    </div>
    <aside class="col-xs-12 col-sm-4">
        <form action="{{ url('testimoni') }}" method="post">
            <h2>Send Testimonial</h2>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="nama" class="input-text" value="{{ Input::old('nama') }}" required >
            </div>
            <div class="form-group">
                <label>Testimonial</label>
                <textarea name="testimonial" class="textarea" required> {{ Input::old('testimonial') }}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-form">Submit</button>
            </div>
        </form>
    </aside>
</div>