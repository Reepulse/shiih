(function ($) {
    "use strict";
	//testimonial carousel setting
    $(".testimonial:has(>li:eq(1)),.norotatingtweets:has(>div:eq(1))").list_ticker({
        speed: 5000,
        effect: 'fade'
    });
})(jQuery);