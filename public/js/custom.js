$(function() {
    "use strict";
	
	$(window).on('load', function () {
		$('#preloader').delay(350).fadeOut('slow');
		$('body').delay(350).css({ 'overflow': 'visible' });
	})
	
	/*---- Bottom To Top Scroll Script ---*/
	$(window).on('scroll', function() {
		var height = $(window).scrollTop();
		if (height > 100) {
			$('#back2Top').fadeIn();
		} else {
			$('#back2Top').fadeOut();
		}
	});
	
	
	/*-------- Price Range Slider ------*/
	var s3 = $("#price-range").freshslider({
		range: true,
		step:100000,
		min: 0,
		max: 10000000,
		value:[0, 10000000],
		onchange:function(low, high){
			console.log(low, high);
		}
	});
	
	/*-------- area Range Slider ------*/
	var s3 = $("#area").freshslider({
		range: true,
		step:10,
		min:0,
		max:500,
		value:[0, 200],
		onchange:function(low, high){
			console.log(low, high);
		}
	});
	
	
	$("#back2Top").on('click', function(event) {
		event.preventDefault();
		$("html, body").animate({ scrollTop: 0 }, "slow");
		return false;
	});

    $('nav.headnavbar').coreNavigation({
		menuPosition: "right", // left, right, center, bottom
		container: true, // true or false
		animated: true,
		animatedIn: 'flipInX',
		animatedOut: 'bounceOut',
		dropdownEvent: 'click', // Hover, Click & Accordion
		onOpenDropdown: function(){
			console.log('open');
		},
		onCloseDropdown: function(){
			console.log('close');
		},
		onOpenMegaMenu: function(){
			console.log('Open Megamenu');
		},
		onCloseMegaMenu: function(){
			console.log('Close Megamenu');
		}
	});
	
	$(window).scroll(function() {    
		var scroll = $(window).scrollTop();

		if (scroll >= 50) {
			$(".header").addClass("header-fixed");
		} else {
			$(".header").removeClass("header-fixed");
		}
	});
	
	// Compare Slide
	$('.csm-trigger').on('click', function() {
		$('.compare-slide-menu').toggleClass('active');
	});
	$('.compare-button').on('click', function() {
		$('.compare-slide-menu').addClass('active');
	});
	
	// smart-textimonials
	$('#smart-textimonials').slick({
	  slidesToShow:1,
	  arrows: false,
	  autoplay:true,
	  responsive: [
		{
		  breakpoint: 768,
		  settings: {
			arrows: false,
			slidesToShow:1
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			arrows: false,
			slidesToShow:1
		  }
		}
	  ]
	});
	
	// Property Slide
	$('.property-slide').slick({
	  slidesToShow:3,
	  arrows: false,
	  autoplay:true,
	  responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			arrows: false,
			slidesToShow:2
		  }
		},
		{
		  breakpoint: 600,
		  settings: {
			arrows: false,
			slidesToShow:1
		  }
		}
	  ]
	});
	
	// Single Sidebar Property Slide
	$('.sidebar-property-slide').slick({
	  slidesToShow:1,
	  arrows: true,
	  autoplay:true,
	  responsive: [
		{
		  breakpoint: 768,
		  settings: {
			arrows: true,
			slidesToShow:1
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			arrows: true,
			slidesToShow:1
		  }
		}
	  ]
	});
	
	// Property Slide
	$('.testi-slide').slick({
	  slidesToShow:2,
	  arrows: false,
	  autoplay:true,
	  responsive: [
		{
		  breakpoint: 1023,
		  settings: {
			arrows: false,
			slidesToShow:1
		  }
		},
		{
		  breakpoint: 768,
		  settings: {
			arrows: false,
			slidesToShow:1
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			arrows: false,
			slidesToShow:1
		  }
		}
	  ]
	});
	
	// Property Slide
	$('.team-slide').slick({
	  slidesToShow:4,
	  arrows: false,
	  autoplay:true,
	  dots:true,
	  responsive: [
		{
		  breakpoint: 1023,
		  settings: {
			arrows: false,
			dots:true,
			slidesToShow:3
		  }
		},
		{
		  breakpoint: 768,
		  settings: {
			arrows: false,
			slidesToShow:2
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			arrows: false,
			slidesToShow:1
		  }
		}
	  ]
	});
	
	$('.imob-d-select2').select2();

	$('.imob-d-select2-ns').select2({
		minimumResultsForSearch: -1
	});
	
	// Home Slider
	$('.home-slider').slick({
	  centerMode:false,
	  slidesToShow:1,
	  responsive: [
		{
		  breakpoint: 768,
		  settings: {
			arrows:true,
			slidesToShow:1
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			arrows: false,
			slidesToShow:1
		  }
		}
	  ]
	});
	
	$('.click').slick({
	  slidesToShow:1,
	  slidesToScroll: 1,
	  autoplay:false,
	  autoplaySpeed: 2000,
	});
	
	// Advance Single Slider
	$(function() { 
	// Card's slider
	  var $carousel = $('.slider-for');

	  $carousel
		.slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  arrows: false,
		  fade: true,
		  adaptiveHeight: true,
		  asNavFor: '.slider-nav'
		})
		.magnificPopup({
		  type: 'image',
		  delegate: 'a:not(.slick-cloned)',
		  closeOnContentClick: false,
		  tLoading: 'Загрузка...',
		  mainClass: 'mfp-zoom-in mfp-img-mobile',
		  image: {
			verticalFit: true,
			tError: '<a href="%url%">Фото #%curr%</a> не загрузилось.'
		  },
		  gallery: {
			enabled: true,
			navigateByImgClick: true,
			tCounter: '<span class="mfp-counter">%curr% из %total%</span>', // markup of counte
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		  },
		  zoom: {
			enabled: true,
			duration: 300
		  },
		  removalDelay: 300, //delay removal by X to allow out-animation
		  callbacks: {
			open: function() {
			  //overwrite default prev + next function. Add timeout for css3 crossfade animation
			  $.magnificPopup.instance.next = function() {
				var self = this;
				self.wrap.removeClass('mfp-image-loaded');
				setTimeout(function() { $.magnificPopup.proto.next.call(self); }, 120);
			  };
			  $.magnificPopup.instance.prev = function() {
				var self = this;
				self.wrap.removeClass('mfp-image-loaded');
				setTimeout(function() { $.magnificPopup.proto.prev.call(self); }, 120);
			  };
			  var current = $carousel.slick('slickCurrentSlide');
			  $carousel.magnificPopup('goTo', current);
			},
			imageLoadComplete: function() {
			  var self = this;
			  setTimeout(function() { self.wrap.addClass('mfp-image-loaded'); }, 16);
			},
			beforeClose: function() {
			  $carousel.slick('slickGoTo', parseInt(this.index));
			}
		  }
		});
	  $('.slider-nav').slick({
		slidesToShow:6,
		slidesToScroll:1,
		asNavFor: '.slider-for',
		dots: false,
		centerMode: false,
		focusOnSelect: true
	  });
	  
	  
	});
	
	// Featured Slick Slider
	$('.featured-slick-slide').slick({
		centerMode: true,
		centerPadding: '80px',
		slidesToShow:2,
		responsive: [
		{
		breakpoint: 768,
		settings: {
		arrows:true,
		centerMode: true,
		centerPadding: '60px',
		slidesToShow:2
		}
		},
		{
		breakpoint: 480,
		settings: {
		arrows: false,
		centerMode: true,
		centerPadding: '40px',
		slidesToShow: 1
		}
		}
		]
	});
	
	// MagnificPopup
	$('body').magnificPopup({
		type: 'image',
		delegate: 'a.mfp-gallery',
		fixedContentPos: true,
		fixedBgPos: true,
		overflowY: 'auto',
		closeBtnInside: false,
		preloader: true,
		removalDelay: 0,
		mainClass: 'mfp-fade',
		gallery: {
			enabled: true
		}
	});
	
	// fullwidth home slider
	function inlineCSS() {
		$(".home-slider .item").each(function() {
			var attrImageBG = $(this).attr('data-background-image');
			var attrColorBG = $(this).attr('data-background-color');
			if (attrImageBG !== undefined) {
				$(this).css('background-image', 'url(' + attrImageBG + ')');
			}
			if (attrColorBG !== undefined) {
				$(this).css('background', '' + attrColorBG + '');
			}
		});
	}
	inlineCSS();
	
});