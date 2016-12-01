define(['jquery','jsSocials'], function($)
{
    return new function(){
        var self = this;
        self.run = function(){
            $("#share-blog").jsSocials({
                showLabel: false,
                showCount: false,
                shareIn: "popup",
                shares: ["twitter", "facebook", "googleplus", "pinterest", "stumbleupon", "whatsapp"]
            });
        };
    }
});