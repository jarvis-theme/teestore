define(['jquery'], function($)
{
    return new function(){
        var self = this;
        self.run = function(){
            profile();
        };

        var profile = function(){
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
        }
    }
});