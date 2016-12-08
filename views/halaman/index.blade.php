<div class="center">
    <h1>{{ $data->judul }}</h1>
    <hr>
</div>
<div class="col-xs-12 col-sm-12">
    <article>
        <span class="highlight_text">{{ @$data->up }}</span>
        {{ $data->isi }}
    </article>
</div>