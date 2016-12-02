<div class="header-top">
    <div class="data-content">
        <div class="hidden-xs">
            <ul class="module-top header-link">
                @if ( !Sentry::check() )
                <li><a href="{{ url('member') }}">Log in</a></li>
                <li>or</li>
                <li><a href="{{ url('member/create') }}">Create account</a></li>
                @else
                <li><a href="{{ url('member') }}">My Account</a></li>
                <li><a href="{{ url('logout') }}">Log out</a></li>
                @endif
            </ul>
            <div class="module-top">
                <span class="header-sep"></span>
                <a href="{{ url('checkout') }}" class="cart-page-link">
                    <span class="fa fa-shopping-cart icon-cart"></span>
                </a>
            </div>
            <div class="module-top" id="shoppingcartplace">
                <a href="{{ url('checkout') }}">Cart {{ shopping_cart() }}</a>
            </div>
        </div>
        <nav class="visible-xs navbar navbar-default nav-mobile">
            <div class="container">
                <div class="navbar-header text-left pull-left">
                    <button type="button" class="navbar-toggle2 mobile-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar" style="float: none;">
                        <span class="text-menu">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <a href="{{ url('checkout') }}" id="shoppingcartplace">
                    <span class="fa fa-shopping-cart icon-cart"></span> <small>{{ shopping_cart() }}</small>
                </a>
                <div id="navbar" class="text-left navbar-collapse collapse">
                    <ul class="nav navbar-nav mobile-nav">
                        @if ( !Sentry::check() )
                        <li><a href="{{ url('member') }}">LOG IN</a></li>
                        <li class="mobilenav-sep"><a href="{{ url('member/create') }}">CREATE ACCOUNT</a></li>
                        @else
                        <li><a href="{{ url('member') }}">MY ACCOUNT</a></li>
                        <li class="mobilenav-sep"><a href="{{ url('logout') }}">LOG OUT</a></li>
                        @endif
                        @foreach(main_menu()->link as $mobilemenu)
                        <li><a href="{{ menu_url($mobilemenu) }}">{{ $mobilemenu->nama }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<header>
    <section class="data-content">
        <h1 class="brand-title">
            <a href="{{ URL::to('/') }}">
                <img src="{{ logo_image_url() }}" class="logo" alt="logo {{ Theme::place('title') }}">
            </a>
        </h1>
        <div class="row hidden-xs">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <nav class="center">
                    <ul>
                        @foreach(main_menu()->link as $menu)
                        <li><a href="{{ menu_url($menu) }}">{{ $menu->nama }}</a></li>
                        <li class="circle fa fa-circle"></li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
    </section>
</header>