    <link type="text/css" rel="stylesheet" href="https://s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/teestore/assets/css/bootstrap.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    @if($tema->isiCss=='') 
    {{ generate_theme_css('teestore/assets/css/style.css?v=002') }} 
    
    @else 
    {{ generate_theme_css('teestore/assets/css/editstyle.css') }} 
    @endif 
    
    <link type="text/css" rel="stylesheet" href="https://s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/teestore/assets/css/flexslider.css">

    <link href="//fonts.googleapis.com/css?family=Cabin:500" rel="stylesheet" type="text/css" media="all" />
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css" />
    {{ favicon() }} 