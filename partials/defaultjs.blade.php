    <!-- Default js -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.3/jquery.flexslider.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>
	<script type="text/javascript" src="{{ Config::get('aws.cdn2.endpoint').'/js/jquery.noty.js' }}"></script>
	<script type="text/javascript" src="{{ Config::get('aws.cdn2.endpoint').'/js/jquery-ui.js' }}"></script>
	<script type="text/javascript" src="{{ Config::get('aws.cdn2.endpoint').'/js/cart.js' }}"></script>
	<script type="text/javascript" src="https://s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/teestore/assets/js/lib/shop.js"></script>
	{{ generate_theme_js('teestore/assets/js/lib/shop.js') }}