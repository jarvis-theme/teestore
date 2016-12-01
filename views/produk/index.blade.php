<div class="row-fluid">
    <div class="col-xs-12 col-sm-12">
        <div class="product-filter">
            <ul class="breadcrumb">
                <li>{{breadcrumbProduk(@$produk, '; <span>></span> ', ';', true, @$category, @$collection)}}</li>
            </ul>
            <div class="row">
                <div class="col-xs-12 col-sm-7"><h1>Product</h1></div>
                <!-- <div class="col-xs-12 col-sm-2 label-filter">
                    <label class="control-label" for="input-sort">Sort By:</label>
                </div>
                <div class="col-xs-12 col-sm-3 text-right">
                    <select id="sort" class="form-control col-sm-3" data-rel="{{ URL::current() }}">
                        <option value="default" {{ Input::get('sort')=="default" ? 'selected="selected"' : '' }}>Relevance</option>
                        <option value="az" {{ Input::get('sort')=="az" ? 'selected="selected"' : '' }}>Name: A - Z</option>
                        <option value="za" {{ Input::get('sort')=="za" ? 'selected="selected"' : '' }}>Name: Z - A</option>
                        <option value="low" {{ Input::get('sort')=="low" ? 'selected="selected"' : '' }}>Price: Low - High</option>
                        <option value="high" {{ Input::get('sort')=="high" ? 'selected="selected"' : '' }}>Price: High - Low</option>
                        <option value="new" {{ Input::get('sort')=="new" ? 'selected="selected"' : '' }}>Item: New - Old</option>
                        <option value="old" {{ Input::get('sort')=="old" ? 'selected="selected"' : '' }}>Item: Old - New</option>
                    </select>
                </div> -->
            </div>
        </div>

        {{-- */ $i=1; /* --}}
        @foreach(list_product(null, @$category, @$colection, null) as $myproduk)
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
        {{ list_product(null, @$category, @$collection, null)->appends(array('show' => Input::get('show'), 'view' => $view))->links() }} 
    </div>
</div>