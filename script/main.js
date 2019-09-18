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

			vibrant_functions.startSlickSlider();

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

		filterTheBoxes: function(index) {
			$('.service-description div').slideUp('500');
			$('.service-description div').eq(index).slideDown('500');

			/*switch(index) {
				  case 0:
				  case 1:
				    $('.video-section, .website-section').addClass('hidden');
				    $('.clients').removeClass('hidden');
				  break;
				  case 2:
				    $('.video-section').addClass('hidden');
				    //$('.website-section').removeClass('hidden');
				  break;
				  case 3:
				    $('.website-section, .clients').addClass('hidden');
				    $('.video-section').removeClass('hidden');
				  break;
				  default:
				    // code block
				}*/
		},
		addHandlers : function() {
			var _this = this;

			$('.menu-toggle').click(function(){
				$(this).toggleClass('active');
				$(this).toggleClass('inactive');
				$('.nav').toggleClass('active');
				$('.nav').toggleClass('inactive');
				$('body').toggleClass('menu-open');
			});

			$('.service-filters li').click(function(e){
				_this.filterTheBoxes($(this).index());
			});
		},

		startSlickSlider : function () {
			$('.cfds-slider').slick({
		        arrows: true,
		        autoplay: false,
		        infinite: true,
		        slidesToShow: 1,
		  		slidesToScroll: 1,
		  		cssEase: "ease",
		  		autoplaySpeed: 1000,
		  		pauseOnFocus: false,
		  		responsive: [
				    {
				      breakpoint: 900,
				      settings: {
				        slidesToShow: 1,
				        slidesToScroll: 1
				      }
				    }
				    // You can unslick at a given breakpoint now by adding:
				    // settings: "unslick"
				    // instead of a settings object
				  ]
		    });

		}
	}

	vibrant_functions.init();
    
    $('.ccm-image-block').hover(function(){
    	console.log($(this).attr('alt'));
    });    

});