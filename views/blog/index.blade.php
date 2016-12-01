<div class="center">
    <h1>{{ @$title }}</h1>
    <hr>
</div>

<section class="blog row-fluid">
    <div class="col-xs-12 col-sm-8">
        @foreach(list_blog(null, @$blog_category, @$tag) as $key=>$value)
        <article>
            <a href="{{ blog_url($value) }}"><h2>{{ $value->judul }}</h2></a>
            <p>
                <small><i class="fa fa-calendar"></i> {{ waktuTgl($value->created_at) }}</small>
                @if(!empty($value->kategori))
                <small><i class="fa fa-tag"></i> <a href="{{ url(blog_category_url($value->kategori)) }}">{{ @$value->kategori->nama }}</a></small>
                @endif
            </p>
            {{ shortDescription($value->isi,300) }} <a href="{{ blog_url($value) }}">read more</a>
        </article>
        @endforeach
        
        {{ list_blog(null, @$blog_category, @$tag)->links() }} 
    </div>

    <div class="col-xs-12 col-sm-4 sidebar-blog">
        <aside>
            <h4><i class="fa fa-tag"></i> Category</h4>
            @foreach(list_blog_category() as $key=>$value)
            <span class="underline"><a href="{{ blog_category_url($value) }}">{{ $value->nama }}</a></span>
            @endforeach
        </aside>
        <aside>
            <h4><i class="fa fa-rss"></i> New Article</h4>
            <ul>
                @foreach(recentBlog() as $recent)
                <li>
                    <a href="{{ blog_url($recent) }}">{{ $recent->judul }}</a><br />
                    <p><i class="fa fa-calendar"></i>&nbsp;&nbsp;{{ waktuTgl($recent->created_at) }}</p>
                </li>
                @endforeach
            </ul>
        </aside>
    </div>
</section>