    <div class="row-fluid">
        <div class="col-lg-12">
            {{-- */ $i=1; /* --}}
            @foreach(home_product() as $key=>$myproduk)
            <div class="col-xs-12 col-sm-3 item">
                <a href="{{ product_url($myproduk) }}">
                    <div class="thumb">
                        <img src="{{ URL::to(product_image_url($myproduk->gambar1, 'medium')) }}" class="img-responsive" alt="{{ $myproduk->nama }}" />
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
            <div class="col-xs-12 col-sm-12 center">
                <a href="{{url('produk')}}" class="btn btn-buy">View Collection</a>
            </div>
        </div>
    </div>