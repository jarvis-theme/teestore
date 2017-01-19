define(['jquery','bootstrap','flexslider'], function($)
{
    return new function(){
        var self = this;
        self.run = function(){
            $('.flexslider-produk').flexslider({
                animation: "slide",
                controlNav: "thumbnails",
                directionNav: false
            });

            $('#flexslider').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: true,
                directionNav: false,
                slideshow: true,
                slideshowSpeed: 5000,
                animationSpeed: 600
            });
        };      
    }
});