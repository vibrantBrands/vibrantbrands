// A $( document ).ready() block.

$( document ).ready(function() {

	var vibrant_functions = {
		init : function() {

			$(window).bind('scroll',function(e){
		        var scrolled = $(window).scrollTop();
		        vibrant_functions.scrollWatch(scrolled);
		    });
		},

		scrollWatch : function(scrolled) {
			if (scrolled < 400) {
                $('.logo').removeClass('folded');
            }
			if (scrolled > 400) {
                $('.logo').addClass('folded');
            }
		}
	}

	vibrant_functions.init();
    
    $('.ccm-image-block').hover(function(){
    	console.log($(this).attr('alt'));
    });

    

});