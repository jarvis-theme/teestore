<div class="row-fluid">
    <div class="article col-xs-12 col-sm-9">
        <div class="center">
            <h2>{{ $detailblog->judul }}</h2>
            <p>
                <small>
                    <i class="fa fa-calendar"></i> {{ date("d M Y", strtotime($detailblog->created_at)) }} 
                    @if(!empty($detailblog->kategori->nama))
                    <i class="fa fa-tag"></i> <a href="{{ blog_category_url($detailblog->kategori) }}">{{ $detailblog->kategori->nama }}</a>
                    @endif
                </small>
            </p>
            <div id="share-blog"></div>
        </div>
        <article>
            <p>{{ $detailblog->isi }}</p>
        </article>
        <div class="navigate comments clearfix">
            @if(prev_blog($detailblog))
                <div class="pull-left"><a href="{{ blog_url(prev_blog()) }}">&larr; Prev</a></div>
            @endif

            @if(next_blog($detailblog))
                <div class="pull-right"><a href="{{ blog_url(next_blog()) }}">Next &rarr;</a></div>
            @endif
        </div>
        <hr>
        <div class="comment">
            {{ $fbscript }} 
            {{ fbcommentbox(blog_url($detailblog), '100%', '5', 'light') }} 
        </div>
    </div>
    <div class="col-xs-12 col-sm-3 sidebar-blog">
        <aside class="clearfix tags">
            <h4><i class="fa fa-tag"></i> Tags</h4>
            {{ getTags('<span class="underline"></span>',$tag) }} 
        </aside>
        <aside>
            <h4><i class="fa fa-rss"></i> New Article</h4>
            <ul>
                @foreach(recentBlog($detailblog) as $recent)
                <li>
                    <a href="{{ blog_url($recent) }}">{{ $recent->judul }}</a><br />
                    <p><i class="fa fa-calendar"></i>&nbsp;&nbsp;{{ waktuTgl($recent->created_at) }}</p>
                </li>
                @endforeach
            </ul>
        </aside>
    </div>
</div>