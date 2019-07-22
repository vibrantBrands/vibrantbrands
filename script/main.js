// A $( document ).ready() block.

$( document ).ready(function() {

	//Initialize AOL animation library

	AOS.init({
		duration: 1000,
		easing: 'ease-out'
	});

	var vibrant_functions = {
		init : function() {

			vibrant_functions.addHandlers();

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
		},

		addHandlers : function() {

			$('.menu-toggle').click(function(){
				$(this).toggleClass('active');
				$(this).toggleClass('inactive');
				$('.nav').toggleClass('active');
				$('.nav').toggleClass('inactive');
				$('body').toggleClass('menu-open');
			});
		}
	}

	vibrant_functions.init();
    
    $('.ccm-image-block').hover(function(){
    	console.log($(this).attr('alt'));
    });

    

});