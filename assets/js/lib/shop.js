$('#toggle-address').on('click', function(){
    if ($('.update-address').hasClass('active')) {
        $('.update-address').hide().removeClass('active');
        $('.update-password').hide().removeClass('active');
        $('#toggle-address').removeClass('active');
    }else{
        $('.update-address').show().addClass('active');
        $('.update-password').hide().removeClass('active');
        $('#toggle-address').addClass('active');
        $('#toggle-password').removeClass('active');
    }
    return false;
});
$('#toggle-password').on('click', function(){
    if ($('.update-password').hasClass('active')) {
        $('.update-password').hide().removeClass('active');
        $('.update-address').hide().removeClass('active');
        $('#toggle-password').removeClass('active');
    }else{
        $('.update-password').show().addClass('active');
        $('.update-address').hide().removeClass('active');
        $('#toggle-password').addClass('active');
        $('#toggle-address').removeClass('active');
    }
    return false;
});

$('.cancel-form').click(function (e) {
    e.preventDefault();
    $('.update-address').hide().removeClass('active');
    $('.update-password').hide().removeClass('active');
});


$(document).ready(function() {
	$("#share").jsSocials({
	    showLabel: false,
	    showCount: false,
	    shareIn: "popup",
	    shares: ["twitter", "facebook", "googleplus", "pinterest", "stumbleupon", "whatsapp", "line"]
	});

    // Fancybox function
    $('.slides a').fancybox();

    $("#share-blog").jsSocials({
        showLabel: false,
        showCount: false,
        shareIn: "popup",
        shares: ["twitter", "facebook", "googleplus", "pinterest", "stumbleupon", "whatsapp", "line"]
    });

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