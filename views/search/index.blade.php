<div class="center">
    <h1>Hasil Pencarian</h1>
    <hr>
</div>
<div class="row-fluid search-result">
    @if($jumlahCari!=0)
        {{-- */ $i=1; /* --}}
        @foreach($hasilpro as $myproduk)
            <div class="col-xs-12 col-sm-3 item">
                <a href="{{ product_url($myproduk) }}">
                    <div class="center">
                        <img src="{{ url(product_image_url($myproduk->gambar1, 'medium')) }}" alt="{{ $myproduk->nama }}" />
                    </div>

                    <h1 class="product-name">{{ short_description($myproduk->nama, 50) }}</h1>
                    <div class="price"><span>{{ price($myproduk->hargaJual) }}</span></div>
                </a>
            </div>
            @if($i % 4 == 0)
            <div class="clearfix hidden-xs"></div>
            @endif
            {{-- */ $i++; /*--}}
        @endforeach
        @foreach($hasilhal as $myhal)
        <article>
            <a href="{{ url('halaman/'.$myhal->slug) }}"><h2>{{ $myhal->judul }}</h2></a>
            <p>{{ shortDescription($myhal->isi,200) }} <a href="{{ url('halaman/'.$myhal->slug) }}">read more</a></p>
        </article>
        @endforeach
        @foreach($hasilblog as $myblog)
        <article>
            <a href="{{ blog_url($myblog) }}"><h2>{{ $myblog->judul }}</h2></a>
            <p>{{ shortDescription($myblog->isi,200) }} <a href="{{ blog_url($myblog) }}">read more</a></p>
        </article>
        @endforeach
    @else
        <article class="center">
            <i>No Results Found</i>
        </article>
    @endif
</div>