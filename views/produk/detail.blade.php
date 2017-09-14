<div class="row-fluid">
    <!-- <ul class="breadcrumb">
        <li>{{ breadcrumbProduk(@$produk, '; <span>></span> ', ';', true, @$category, @$collection) }}</li>
    </ul> -->
    <div class="col-sm-6">
        <div id="slider" class="flexslider">
            <ul class="slides">
                @if($produk->gambar1!='') 
                <li>
                    <a href="{{ url(product_image_url($produk->gambar1,'large')) }}" title="{{ $produk->nama }}">
                        <img src="{{ url(product_image_url($produk->gambar1,'medium')) }}" />
                    </a>
                </li>
                @endif
                @if($produk->gambar2!='') 
                <li>
                    <a href="{{ url(product_image_url($produk->gambar2,'large')) }}" title="{{ $produk->nama }}">
                        <img src="{{ url(product_image_url($produk->gambar2,'medium')) }}" />
                    </a>
                </li>
                @endif
                @if($produk->gambar3!='') 
                <li>
                    <a href="{{ url(product_image_url($produk->gambar3,'large')) }}" title="{{ $produk->nama }}">
                        <img src="{{ url(product_image_url($produk->gambar3,'medium')) }}" />
                    </a>
                </li>
                @endif
                @if($produk->gambar4!='') 
                <li>
                    <a href="{{ url(product_image_url($produk->gambar4,'large')) }}" title="{{ $produk->nama }}">
                        <img src="{{ url(product_image_url($produk->gambar4,'medium')) }}" />
                    </a>
                </li>
                @endif
            </ul>
        </div>
        <div id="thumb-slider" class="flexslider">
            <ul class="slides">
                @if($produk->gambar1 != '') 
                <li>
                    <img src="{{ url(product_image_url($produk->gambar1,'thumb')) }}" />
                </li>
                @endif
                @if($produk->gambar2 != '') 
                <li>
                    <img src="{{ url(product_image_url($produk->gambar2,'thumb')) }}" />
                </li>
                @endif
                @if($produk->gambar3 != '') 
                <li>
                    <img src="{{ url(product_image_url($produk->gambar3,'thumb')) }}" />
                </li>
                @endif
                @if($produk->gambar4 != '') 
                <li>
                    <img src="{{ url(product_image_url($produk->gambar4,'thumb')) }}" />
                </li>
                @endif
            </ul>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="option-title">
            <h1>{{ $produk->nama }}</h1>
            <div class="price">
                @if($produk->hargaCoret != 0)
                <p class="item-price sale">{{ price($produk->hargaCoret) }}</p>
                @endif
                <p class="item-price">{{ price($produk->hargaJual) }}</p>
            </div>
        </div>
        <form action="#" id="addorder">
            @if($opsiproduk->count() > 0)
            <div class="form-group">
                <label>Option Product :</label>
                <select>
                    <option value=""> Pick a Option Product </option>
                    @foreach ($opsiproduk as $key => $opsi)
                    <option value="{{ $opsi->id }}" {{ $opsi->stok==0 ? 'disabled':'' }} >
                        {{ $opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3) }} {{ price($opsi->harga) }}
                    </option>
                    @endforeach
                </select>
            </div>
            @endif
            <div class="form-group">
                <label>Quantity</label>
                <input type="number" value="1" name="qty" class="qty" pattern="[0-9]">
            </div>
            <button type="submit" class="btn btn-form">Add to Cart</button>
        </form>
    
        <div class="description">
            <p>{{ $produk->deskripsi }}</p>
        </div>
        <div id="share"></div>
    </div>
</div>
<div class="row-fluid">
    <div class="col-sm-12">
        <br>
        {{ pluginComment(product_url($produk), @$produk) }} 
    </div>
</div>
@if(count(other_product($produk))>0)
<!-- <div class="row-fluid">
    <div class="col-sm-12">
        <div class="cross-wrapper">
            <hr />
            <h3 class="desc-title">Related Product</h3>
            <hr />
            <section class="row-fluid cross-product">
                @foreach(other_product($produk) as $myproduk)
                <div class="col-xs-12 col-sm-3">
                    <a href="{{ product_url($myproduk) }}">
                        <div class="thumb">
                            <img src="{{ URL::to(product_image_url($myproduk->gambar1, 'medium')) }}" class="img-responsive" alt="{{ $myproduk->nama }}" />
                        </div>

                        <h1 class="product-name">{{ short_description($myproduk->nama, 50) }}</h1>
                        <div class="price"><span>{{ price($myproduk->hargaJual) }}</span></div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div> -->
@endif