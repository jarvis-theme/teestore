define(['jquery','fancybox','flexslider','jsSocials'], function($,fancybox,flexslider,jsSocials)
{
    return new function()
    {
        var self = this;
        self.run = function()
        {
            slider();

            $(document).ready(function() {
                // Fancybox function
                $('.slides a').fancybox();
                
                $("#share").jsSocials({
                    showLabel: false,
                    showCount: false,
                    shareIn: "popup",
                    shares: ["twitter", "facebook", "googleplus", "pinterest", "stumbleupon", "whatsapp"]
                });
            });
        };

        var slider = function(){
            $(window).load(function() {
                $('#thumb-slider').flexslider({
                    animation: "slide",
                    controlNav: false,
                    animationLoop: false,
                    slideshow: false,
                    itemWidth: 160,
                    itemMargin: 5,
                    asNavFor: '#slider'
                });
             
                $('#slider').flexslider({
                    animation: "slide",
                    controlNav: false,
                    animationLoop: false,
                    slideshow: false,
                    directionNav: false,
                    sync: "#thumb-slider"
                });
            });
        };

    };
});