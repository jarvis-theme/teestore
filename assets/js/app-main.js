var dirTema = document.querySelector("meta[name='theme_path']").getAttribute('content');

require.config({
	baseUrl: '/',
    urlArgs: "v=001d",
	waitSeconds : 60,
	shim: {
		"bootstrap"	: {
			deps: ['jquery'],
		},
		"fancybox" : {
			deps: ['jquery'],
		},
		"flexslider" : {
			deps : ['jquery'],
		},
		'jq_ui' : {
			deps : ['jquery'],
		},
		"noty" : {
			deps : ['jquery'],
		},
	},

	paths: {
		// LIBRARY
		bootstrap 		: '//maxcdn.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min',
		cart			: 'js/shop_cart',
		flexslider		: '//cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.3/jquery.flexslider.min',
		fancybox		: '//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min',
		jq_ui			: 'js/jquery-ui',
		jquery 			: '//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min',
		noty			: 'js/jquery.noty',
		jsSocials		: '//cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min',

		// ROUTE
		router          : 'js/router',

		// CONTROLLER
		blog            : dirTema+'/assets/js/pages/blog',
		home            : dirTema+'/assets/js/pages/home',
		main            : dirTema+'/assets/js/pages/default',
		member          : dirTema+'/assets/js/pages/member',
		produk          : dirTema+'/assets/js/pages/produk',
	}
});
require([
	'router',
	'main',
	'cart'
], function(router,main,cart){
	// BLOG
	router.define('blog/*', 'blog@run');
	
	// HOME
	// router.define('/','home@run');
	// router.define('home', 'home@run');

	// MEMBER
	// router.define('member/*', 'member@run');

	// PRODUK
	router.define('produk/*', 'produk@run');
	
	router.run();
	main.run();
	cart.run();
});