// A $( document ).ready() block.

$( document ).ready(function() {
	//Initialize AOL animation library

	AOS.init({
		duration: 1000,
		easing: 'ease-out'
	});

	var vibrant_functions = {
		hashArray : ["branding","marketing","websites","video"],
		init : function() {
			_this = this;

			vibrant_functions.addHandlers();

			vibrant_functions.startSlickSlider();

			//_this.filterTheBoxes(window.location.hash);

			/*$(window).bind('scroll',function(e){
		        var scrolled = $(window).scrollTop();
		        vibrant_functions.scrollWatch(scrolled);
		    });*/

			/*$(window).bind('hashchange', function(e) {
				_this.filterTheBoxes(window.location.hash);
			});*/

			/*var el1 = document.querySelector('.counter1');
			var el2 = document.querySelector('.counter2');
			var el3 = document.querySelector('.counter3');

			od = new Odometer({
			  el: el1,
			  value: 0,
			  theme: 'default'
			});

			od = new Odometer({
			  el: el2,
			  value: 0,
			  theme: 'default'
			});

			od = new Odometer({
			  el: el3,
			  value: 0,
			  theme: 'default'
			});

			el1.innerHTML = 5552340;
			el2.innerHTML = 467;
			el3.innerHTML = 78948;*/
		},

		scrollWatch : function(scrolled) {
			if (scrolled < 400) {
                $('.logo').removeClass('folded');
            }
			if (scrolled > 400) {
                $('.logo').addClass('folded');
            }
		},

		filterTheBoxes: function(hash) {

			$('.service-description div').slideUp('500');
			$('.click-below').text('Visit the stories below to learn more.');

			if(hash !== '') {
				$('html, body').animate({
            		scrollTop: $('.service-filters').offset().top - 170
        		}, 500);
			}

			switch(hash) {
				  case "#branding":
					$('.video-section, .website-section').addClass('hidden');
				    $('.clients').removeClass('hidden');
				    $('.service-description div').eq(0).slideDown('500');
				  break;
				  case "#marketing":
				    $('.video-section, .website-section').addClass('hidden');
				    $('.clients').removeClass('hidden');
				    $('.service-description div').eq(1).slideDown('500');
				  break;
				  case "#websites":
				    $('.video-section, .clients').addClass('hidden');
				    $('.website-section').removeClass('hidden');
				    $('.service-description div').eq(2).slideDown('500');
				  break;
				  case "#video":
				    $('.website-section, .clients').addClass('hidden');
				    $('.video-section').removeClass('hidden');
				    $('.service-description div').eq(3).slideDown('500');
				    $('.click-below').text('Visit the stories below to learn more.');
				  break;
				  default:
				  		$('.intro').slideDown('500');
				  break;
				    // code block
				}
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

			/*$('.service-filters li').click(function(e){
				window.location.hash = _this.hashArray[$(this).index()];
			});*/
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

});