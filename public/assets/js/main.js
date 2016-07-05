/* ================================================
----------------- Legend Custom.js ------------- */
(function ($) {
	"use strict";
	var Legend = {
		initialised: false,
		mobile: false,
		container : $('#portfolio-item-container'),
		init: function () {

			if(!this.initialised) {
				this.initialised = true;
			} else {
				return;
			}

			// Call Legend Functions
			this.checkMobile();
			this.addTouchClass();
			this.menuHover();
			this.stickyMenu();
			this.mobileMenuDisplay();
			this.mobileMenuCollapse();
			this.scrollToTop();
			this.twitterFeed();
			this.flickerFeed();
			this.progressBars();
			this.countTo();
			this.scrollAnimations();

			/* Call function if Owl Carousel plugin is included */
			if ( $.fn.owlCarousel ) {
				this.owlCarousels();
			}

			/* Call function if Magnific Popup plugin is included */
			if ( $.fn.magnificPopup) {
				this.lightBox();
			}

			/* Call function if Media element plugin is included */
			if ($.fn.mediaelementplayer) {
				this.mediaElement();
			}

			var self = this;
			/* Imagesloaded plugin included in isotope.pkgd.min.js */
			/* Portfolio isotope + Blog masonry with images loaded plugin */
			if ( typeof imagesLoaded === 'function' ) {
				/* */
				imagesLoaded(self.container, function() {
					self.isotopeActivate();
					// recall for plugin support
					self.isotopeFilter();
				});
			}

		},
		checkMobile: function () {
			/* Mobile Detect*/
			if ( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test( navigator.userAgent ) ) {
				this.mobile = true;
			} else {
				this.mobile = false;
			}
		},
		addTouchClass: function () {
			if ( this.mobile ) {
				$('body').addClass('touch');
			} else {
				$('body').removeClass('touch');
			}
		},
		menuHover: function () {
			// Sub menu show/hide with hoverIntent plugin
			if ( $.fn.hoverIntent ) {
				$('ul.menu').hoverIntent({
					over: function() {
						$(this).addClass('open');

					},
					out: function() {
						$(this).removeClass('open');
					},
					selector: 'li',
					timeout: 125,
					interval: 50
				});
			}
		},
		stickyMenu: function () {
			// Stickymenu with waypoint and waypoint sticky plugins - call if sticky-menu class is added
			if ( $('.sticky-menu').length && $(window).width() >= 992 ) {
				var sticky = new Waypoint.Sticky({
					element: $('.sticky-menu')[0],
					stuckClass: 'fixed',
					offset: -300
				});
			}
		},
		mobileMenuDisplay: function () {
			// Menu Display via btn (see: index4.hmtl)
			$('.navbar-toggle, #mobile-menu-overlay, #mobile-menu-close').on('click', function (e) {
				$('body').toggleClass('open-menu');
				e.preventDefault();
			});	
		},
		mobileMenuCollapse: function () {
			/* Toggle mobile menu sub menus */
			$('.mobile-menu').find('a').on('click', function(e) {
				if ($(this).closest('li').find('ul').length) {
					$(this).closest('li').children('ul').slideToggle(300, function () {
						$(this).closest('li').toggleClass('open');
					});
					e.preventDefault();
				} else {
					return;
				}

			});
		},
		owlCarousels: function () {
			/* Clients Carousel */
			$('.clients-carousel.owl-carousel').owlCarousel({
	            loop:false,
				margin:30,
				responsiveClass:true,
				nav:true,
				navText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],
				dots: false,
				autoplay: true,
				autoplayTimeout: 15000,
				responsive:{
					0: {
						items:1
					},
					420: {
						items:2
					},
					768: {
						items:3
					},
					992: {
						items:4
					}
				}
	        });

	        /* Homepage 2 */
			$('.clients-link-carousel.owl-carousel').owlCarousel({
	            loop:false,
				margin:30,
				responsiveClass:true,
				nav:false,
				navText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],
				dots: false,
				autoplay: true,
				autoplayTimeout: 14000,
				responsive:{
					0: {
						items:1
					},
					420: {
						items:2
					},
					768: {
						items:3
					},
					992: {
						items:4
					}
				}
	        });

	        /* Portfolio Post - Related carousel */
			$('.portfolio-related-carousel.owl-carousel').owlCarousel({
	            loop:false,
				margin:0,
				responsiveClass:true,
				nav:false,
				navText: ['<i class="fa fa-angle-left">', '<i class="fa fa-angle-right">'],
				dots: false,
				autoplay: true,
				autoplayTimeout: 14000,
				responsive:{
					0: {
						items:1
					},
					420: {
						items:2
					},
					768: {
						items:3
					},
					992: {
						items:4
					}
				}
	        });
		},
		tooltip: function () {
			// Bootstrap Tooltip
			if ( $.fn.tooltip ) {
				$('[data-toggle="tooltip"]').tooltip();
			}
		},
		popover: function () {
			// Bootstrap Popover
			if ( $.fn.popover ) {
				$('[data-toggle="popover"]').popover({
					trigger: 'focus'
				});
			}
		},
		scrollBtnAppear: function () {
	        if ( $(window).scrollTop() >= 400 ) {
	            $('#scroll-top').addClass('fixed');
	        } else {
	            $('#scroll-top').removeClass('fixed');
	        }
		},
		scrollToTop: function () {
			$('#scroll-top').on('click', function (e) {
		        $('html, body').animate({
			            'scrollTop': 0
		        }, 1200);
				e.preventDefault();
			});
		},
		lightBox: function () {
			/* Lightbox for portfolio items and videso and etc.. */
			$('.popup-gallery').magnificPopup({
				delegate: '.zoom-item',
				type: 'image',
				closeOnContentClick: false,
				closeBtnInside: false,
				mainClass: 'mfp-fade',
				image: {
					verticalFit: true,
					titleSrc: function(item) {
						return item.el.attr('title');
					}
				},
				gallery: {
					enabled: true
				}
			});
		},
		progressBars: function () {
			var self = this;
			// Calculate and Animate Progress 
			$('.progress-animate').waypoint( function (direction) {
				var $this =  $(this.element),
					progressVal = $this.data('width');

				$this.css({ 'width' : progressVal + '%'}, 400);

				setTimeout(function() {
					$this.removeClass('progress-animate');
					$this.find('.progress-text').fadeIn(400);
				}, 400);
			}, {
				offset: '80%',
				triggerOnce: true 
			});
		},
		countTo: function () {
			// CountTo plugin used count animations for homepages
			if ( $.fn.countTo ) {
				if ($.fn.waypoint) {
					$('.count').waypoint( function () {
						$(this.element).countTo();
					}, {
						offset: '80%',
						triggerOnce: true 
					});
				} else {
					$('.count').countTo();
				}	
			} else { 
				// fallback if count plugin doesn't included
				// Get the data-to value and add it to element
				$('.count').each(function () {
					var $this = $(this),
						countValue = $this.data('to');
						$this.text(countValue);
				});
			}
		},
		scrollAnimations: function () {
			/* Wowy Plugin */
			if ( typeof WOW === 'function' ) {
				new WOW({
					boxClass:     'wow',      // default
					animateClass: 'animated', // default
					offset:       0          // default
				}).init();
			}
		},
		twitterFeed: function () {
			/* Twitter feed for user*/
			if ( $.fn.tweet && $('.twitter-feed-widget').length ) {
			    $('.twitter-feed-widget').tweet({
			        modpath: './assets/js/twitter/',
			        avatar_size: '',
					count: 2,
					username: 'envato', // change username with query if you want to display search results
					loading_text:  'searching twitter...',
			        join_text: '',
			        retweets: true,
			        template: '<div class="twitter-icon"><i class="fa fa-twitter"></i></div><div class="tweet-content">{text}{time}</div>'
			        /* etc... */
			    });
			}
		},
		flickerFeed: function () {
			/* Flickr feed plugin - Sidebar */
			if ( $.fn.jflickrfeed ) {
				$('.flickr-widget').jflickrfeed({
					limit: 9,
					qstrings: {
						id: '54297118@N03' // change with you flickr id
					},
					itemTemplate: '<li>' + '<a href="{{image}}" target="_blank" title="{{title}}">' + '<img src="{{image_s}}" alt="{{title}}" />' + '</a>' + '</li>'
				});

				$('.sidebar-flickr-widget').jflickrfeed({
					limit: 6,
					qstrings: {
						id: '54297118@N03' // change with you flickr id
					},
					itemTemplate: '<li>' + '<a href="{{image}}" target="_blank" title="{{title}}">' + '<img src="{{image_s}}" alt="{{title}}" />' + '</a>' + '</li>'
				});
			}
		},
		isotopeActivate: function() {
			// Trigger for isotope plugin
			if ( $.fn.isotope ) {
				var container = this.container,
					layoutMode = container.data('layoutmode');

				container.isotope({
                	itemSelector: '.portfolio-item',
                	layoutMode: (layoutMode) ? layoutMode : 'masonry'
            	});
			}
		},
		isotopeReinit: function () {
			// Recall for isotope plugin
			if ( $.fn.isotope ) {
				this.container.isotope('destroy');
				this.isotopeActivate();
			}
		},
		isotopeFilter: function () {
			// Isotope plugin filter handle
			var self = this,
				filterContainer = $('#portfolio-filter');

			filterContainer.find('a').on('click', function(e) {
				var $this = $(this),
					selector = $this.attr('data-filter');

				filterContainer.find('.active').removeClass('active');

				// And filter now
				self.container.isotope({
					filter: selector,
					transitionDuration: '0.8s'
				});
				
				$this.closest('li').addClass('active');
				e.preventDefault();
			});
		}
	};

	// Ready Event
	$(document).ready(function () {
		// Init our app
		Legend.init();
	});

	// Load Event
	$(window).on('load', function() {
		Legend.scrollBtnAppear();
	});

	// Scroll Event
	$(window).on('scroll', function () {
		Legend.scrollBtnAppear();
	});


	// Google Map api v3
    if ( document.getElementById("map") && typeof google === "object" ) {
        var locations = [
            [
            	'<address><strong>Endereço:</strong> Edifício Mondrian Tower | Av. Washington Luiz, 4º andar, Salas 41 | Jardim Emília - Sorocaba - SP | CEP 18031-000.<br> <strong>Phone:</strong> 015 3211-5312 </address>',
            	-23.5143187,
            	-47.4624955
        	]
        ];

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 20,
            center: new google.maps.LatLng(-23.5143187, -47.4624955),
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow();


        var marker, i;

        for ( i = 0; i < locations.length; i++ ) {  
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map,
            animation: google.maps.Animation.DROP,
            icon: 'assets/images/pin.png'
          });

          google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function() {
              infowindow.setContent(locations[i][0]);
              infowindow.open(map, marker);
            }
          })(marker, i));
        }
    }
})(jQuery);