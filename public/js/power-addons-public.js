( function( $ ) {

	$( document ).ready( function() {

		'use strict';

		$('.pa-video-play-btn').magnificPopup({
			disableOn: 700,
			type: 'iframe',
			mainClass: 'mfp-zoom-in',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});

		// Contact form 7
		(function() {
			$('.discover-contact-form').find('.wpcf7-form-control').on('click', function() {
				var $this = $(this);
				$('.discover-contact-form').find('.wn-cnform').removeClass('wn-active');
				$this.closest('.wn-cnform').addClass('wn-active');
			});
		})();

		$('.donate-popup').magnificPopup({
		  delegate: '.donate-button',
		  removalDelay: 500, //delay removal by X to allow out-animation
		  callbacks: {
		    beforeOpen: function() {
		       this.st.mainClass = this.st.el.attr('data-effect');
		    }
		  },
		  midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
		});

		// Alerts
		var close = document.getElementsByClassName("pa-close");
		var i;
		for (i = 0; i < close.length; i++) {
		    close[i].onclick = function(){
		        var div = this.parentElement;
		        div.style.opacity = "0";
		        setTimeout(function(){ div.style.display = "none"; }, 600);
		    }
		}

		// Masonry
		$(window).load(function() {
			if($('#pin-content').length){
				$('#pin-content').masonry({
					itemSelector: '.pin-box',
				}).imagesLoaded(function() {
					$('#pin-content').data('masonry');
				});
			}
		});

		// IconBox 22
		$('.pa-icon-box22').on('mouseenter', function() {
			$('.pa-icon-box22').removeClass('w-featured');
			$(this).addClass('w-featured');
		});
		
		// row animation
		$('.w-animate:not(.w-start_animation)').waypoint(function() {
			$(this).addClass('w-start_animation');
		},
		{
			offset: '70%'
		});
		
		// elements animation
		$('.pa-max-title:not(.wn-done-anim), .pa-subtitle-element:not(.wn-done-anim), .wn-layer-anim:not(.wn-done-anim), .pa-title-plus-text:not(.wn-done-anim)').waypoint(function() {
			$(this).addClass('wn-done-anim');
		},
		{
			offset: '80%'
		});


		// FlexSlider			
		$(window).load(function() {
			$('.flexslider').flexslider({
				animation: 'slide',
				controlNav: true, 
				directionNav: true,
				prevText: '<i class="fa-chevron-left"></i>',
				nextText: '<i class="fa-chevron-right"></i>',
			});
		});
		

		// Testimonial carousel
		(function(){
			var owl   = $('.pa-testimonial-owl-carousel'),
				items = owl.data('pa-testimonial_count');

			owl.OwlCarousel({
				items : items,
				itemsDesktop : [1200,2], // 2 items between 1200px and 961px
				itemsDesktopSmall : [960,2], // 2 betweem 960px and 480px
				itemsMobile : [768,1], // 1 items between 768px and 0
				pagination: false,
				navigation: true,
				navigationText : ["",""],
			});
			$(".tc-navigation .next").click(function(){
				owl.trigger('.pvaowl-next');
			});
			$(".tc-navigation .prev").click(function(){
				owl.trigger('.pvaowl-prev');
			});
		})();


		// Latest From Blog Carousel
		jQuery(".pa-latest-b-carousel").OwlCarousel({
			items : $(this).data('items'),
			itemsDesktop : [1200,3], // 3 items between 1200px and 961px
			itemsDesktopSmall : [960,2], // 2 betweem 960px and 480px
			itemsMobile : [479,1], // 1 items between 479px and 0
		  	autoPlay : true,
			pagination : false,
			navigation : true,
			navigationText : ["",""],
		});


		// Webnus Image Carousel
		jQuery(".pa-w-image-carousel").OwlCarousel({
			items : $(this).data('items'),
		  	autoPlay : 2000,
			pagination : false,
			navigation : false,
			navigationText : ["",""],
		});
		$('.pa-latest-b-carousel').find('.owl-item .vc_col-md-4').removeClass('vc_col-md-4 vc_col-sm-4').end().find('.owl-item .vc_col-md-3').removeClass('vc_col-md-3 vc_col-sm-3');
			

		// Our Clients carousel 
		jQuery("#pa-our-clients.crsl").OwlCarousel({
			autoPlay : true,
			pagination : false,
			navigation : true,
			navigationText : ["",""],
		});


		// Our Team Carousel
		jQuery(".pa-our-service-carousel-wrap").OwlCarousel({
			items : $(this).data('items'),
			itemsDesktop : [1200,3],        // 3 items between 1200px and 961px
			itemsDesktopSmall : [960,2],    // 2 betweem 960px and 480px
			itemsMobile : [479,1],          // 1 items between 479px and 0
		  	autoPlay : true,
			pagination : false,
			navigation : true,
			navigationText : ["",""],
		});


		// Countdown
		jQuery('.pa-countdown-w').each(function() {
			var days = jQuery('.days-w .count-w', this);
			var hours = jQuery('.hours-w .count-w', this);
			var minutes = jQuery('.minutes-w .count-w', this);
			var seconds = jQuery('.seconds-w .count-w', this);
			var until = parseInt(jQuery(this).data('until'), 10);
			var done = jQuery(this).data('done');
			var self = jQuery(this);
			var updateTime = function() {
				var now = Math.round( (+new Date()) / 1000 );
				if(until <= now) {
					clearInterval(interval);
					self.html(jQuery('<span />').addClass('done-w block-w').html(jQuery('<span />').addClass('count-w').text(done)));
					return;
				}
				var left = until-now;
				seconds.text(left%60);
				left = Math.floor(left/60);
				minutes.text(left%60);
				left = Math.floor(left/60);
				hours.text(left%24);
				left = Math.floor(left/24);
				days.text(left);
			};
			var interval = setInterval(updateTime, 1000);
		});

		// toggle box
		(function(){
			var $single_room = $('.pa-suite-toggle');

			$single_room.find('.extra-content').hide();

			$(document).on('click', '.pa-suite-toggle .toggle-content .ti-plus', function() {
				$(this).parent().parent().find('.extra-content').show(300);
				$(this).closest('.pa-suite-toggle').addClass('click');
				$(this).removeClass('ti-plus').addClass('ti-minus');
			});

			$(document).on('click', '.pa-suite-toggle .toggle-content .ti-minus', function() {
				$(this).parent().parent().find('.extra-content').hide(300);
				$(this).closest('.pa-suite-toggle').removeClass('click');
				$(this).removeClass('ti-minus').addClass('ti-plus');
			})
		})();

		// toggle box
		(function(){

			$(document).on('click', '.pa-offer-toggle .toogle-plus .ti-plus', function() {
				$(this).parent().parent().find('.toggle-content').show(300);
				$(this).removeClass('ti-plus').addClass('ti-minus');
			});

			$(document).on('click', '.pa-offer-toggle .toogle-plus .ti-minus', function() {
				$(this).parent().parent().find('.toggle-content').hide(300);
				$(this).removeClass('ti-minus').addClass('ti-plus');
			});

		})();

		// Countdown Clock
		var doneMessage = jQuery('.pa-countdown-clock').data('done');
		var futureDate  = new Date(jQuery('.pa-countdown-clock').data('future'));
		var currentDate = new Date();
		var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;
		function dayDiff(first, second) {
			return (second-first)/(1000*60*60*24);
		}
		if (dayDiff(currentDate, futureDate) < 100) {
			jQuery('.pa-countdown-clock').addClass('twoDayDigits');
		} else {
			jQuery('.pa-countdown-clock').addClass('threeDayDigits');
		}
		if(diff < 0) {
			diff = 0;
			jQuery('.countdown-message').html(doneMessage);
		}
		var clock = jQuery('.pa-countdown-clock').FlipClock(diff, {
			clockFace: 'DailyCounter',
			countdown: true,
			autoStart: true,
				callbacks: {
				stop: function() {
					jQuery('.countdown-message').html(doneMessage)
				}
			}
		});

		// Max Counter
		jQuery('.pa-max-counter').each(function(i, el){
			var counter = jQuery(el).data('counter');
			if ( jQuery(el).visible(true) && !jQuery(el).hasClass('counted') ) {
				setTimeout ( function () {
					jQuery(el).addClass('counted');
					jQuery(el).find('.pa-max-count').countTo({
						from: 0,
						to: counter,
						speed: 2000,
						refreshInterval: 100
					});
				}, 1000 );
			}
		});
		var win 	= jQuery(window),
			allMods = jQuery(".pa-max-counter");
		win.on('scroll',  function(event) {
			allMods.each(function(i, el) {
				var el = jQuery(el),
					effecttype = el.data('effecttype');
				if( effecttype === 'counter') {
					var counter = el.data('counter');
					if ( el.visible(true) && !jQuery(el).hasClass('counted') ) {
						el.addClass('counted');
						el.find('.pa-max-count').countTo({
							from: 0,
							to: counter,
							speed: 2000,
							refreshInterval: 100
						});
					}
				}
			});
		});
		jQuery.fn.countTo = function (options) {
			options = options || {};
			return jQuery(this).each(function () {
				// set options for current element
				var settings = jQuery.extend({}, jQuery.fn.countTo.defaults, {
					from:            jQuery(this).data('from'),
					to:              jQuery(this).data('to'),
					speed:           jQuery(this).data('speed'),
					refreshInterval: jQuery(this).data('refresh-interval'),
					decimals:        jQuery(this).data('decimals')
				}, options);
				// how many times to update the value, and how much to increment the value on each update
				var loops = Math.ceil(settings.speed / settings.refreshInterval),
					increment = (settings.to - settings.from) / loops;
				// references & variables that will change with each update
				var self = this,
					$self = jQuery(this),
					loopCount = 0,
					value = settings.from,
					data = $self.data('countTo') || {};
				$self.data('countTo', data);
				// if an existing interval can be found, clear it first
				if (data.interval) {
					clearInterval(data.interval);
				}
				data.interval = setInterval(updateTimer, settings.refreshInterval);
				// initialize the element with the starting value
				render(value);
				function updateTimer() {
					value += increment;
					loopCount++;
					render(value);
					if (typeof(settings.onUpdate) == 'function') {
						settings.onUpdate.call(self, value);
					}
					if (loopCount >= loops) {
						// remove the interval
						$self.removeData('countTo');
						clearInterval(data.interval);
						value = settings.to;
						if (typeof(settings.onComplete) == 'function') {
							settings.onComplete.call(self, value);
						}
					}
				}
				function render(value) {
					var formattedValue = settings.formatter.call(self, value, settings);
					$self.html(formattedValue);
				}
			});
		};
		jQuery.fn.countTo.defaults = {
			from: 0,               // the number the element should start at
			to: 0,                 // the number the element should end at
			speed: 1000,           // how long it should take to count between the target numbers
			refreshInterval: 100,  // how often the element should be updated
			decimals: 0,           // the number of decimal places to show
			formatter: formatter,  // handler for formatting the value before rendering
			onUpdate: null,        // callback method for every time the element is updated
			onComplete: null       // callback method for when the element finishes updating
		};
		function formatter(value, settings) {
			return value.toFixed(settings.decimals);
		};

	}); // end document ready

})( jQuery );




