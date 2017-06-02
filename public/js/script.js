;(function($, window, document, undefined) {
	'use strict';

	var fixHeader = function() {
		var header = $('.header').removeAttr('style'),
			headerWidth = header.width();

		header.css({
			width: headerWidth,
			position: 'fixed',
			left: 0,
			top: 0
		});
	};

	fixHeader();

	// equal maxHeight plugin
	$.fn.eqMaxHeight = function() {
		$('[data-eqMaxHeight]').each(function() {
			var h = false,
				mx = false;

			$( $(this).attr('data-eqMaxheight') ).css('min-height', 'auto').each(function() {
				h = $(this).height();
				if(!mx || (h > mx)) mx = h;
			}).css('min-height', mx);
		});
	};

	// scroll animation plugin
	$.fn.scrollDance = function() {
		var $this = this,	
			$childs = $('.scrollDance'),
			offset = $(window).height() - 80;

		$(window).resize(function() {
			offset = $(window).height() - 80;
		});

		function getOffset() {
			return offset;
		};

		return $this.on('scroll', function() {

			$childs.each(function() {
				var $child = $(this);
				var pos = $child.offset().top;
				var delay = parseInt( $child.attr('data-delay') ) || false;

				if(pos <=  getOffset()) {
					delay ? setTimeout(function() {
						$child.addClass('dance');
					}, delay) : $child.addClass('dance');
				}
			});

		});
	};

	$.fn.coolWheel = function() {
		if(is.mobile()) return;

		var $container = $('.pusher > .inner'),
			$header    = $('.header'),
			$sections  = $('.coolWheel'),
			len        = $sections.length,
			$current   = null,
			index      = 0,
			pos,
			isScrolling = false;

		function animateToSection($el) {
			if( $el.hasClass('banner-slider') ) {
				pos = 0;
			} else pos = $el.offset().top + $container.scrollTop() - $header.outerHeight();

			isScrolling = true;
			$container.stop().animate({
				scrollTop: pos
			}, {
				duration: 1000,
				complete: function() {
					isScrolling = false;
				}
			});
		}

		$container.on('mousewheel', function(e) {
			e.preventDefault();
			if(isScrolling) return;
			
			if( e.deltaY === -1 ) {
				index === len || index++;
			} else if(index) index--;

			$current = index ? $( $sections[index - 1] ) : $('.banner-slider');
			animateToSection($current);
		});
	};

	$.fn.coolWheel();

	$(window).eqMaxHeight();

	$('.pusher > .inner').scrollDance();

	$(window).on('load resize', function() {
		$(window).eqMaxHeight();
		fixHeader();
	});

	// removing the slider background
	if(is.mobile() || $(window).width() < 768) {
		$('.banner-slider > .item-video').remove();
	} else {
		$('.banner-slider > .item-video').each(function() {
			var videoContainer = $(this).find('.item-video-container'),
				videoPath = videoContainer.attr('data-video'),
				videoPoster = videoContainer.attr('data-poster');

			videoContainer.vide({
				mp4: videoPath,
				poster: videoPoster
			}, {
				autoplay: false
			});
		});
	}

	var $bannerSlider = $('.banner-slider').bxSlider({
		auto: true,
		controls: false,
		mode: 'fade',
		pager: false,
		pause: 12000,
		speed: 600,

		onSlideBefore: function($element) {
			$('.banner-slider').find('video').each(function() {
				this.pause();
			});

			$element.find('.child-item').removeClass('active');

			if($element.hasClass('item-video')) {
				var vide = $element.find('.item-video-container').data('vide'),
					video = vide.getVideoObject();

				video.play();

				$(video).one('ended', function() {
					$bannerSlider.goToNextSlide();
					console.log(video);
				});
			}
		},

		onSlideAfter: function($element) {
			var t = 200;

			$element.find('.child-item').each(function(i) {
				var child = $(this);

				setTimeout(function() {
					child.addClass('active');
				}, t * i);
			});
		}
	});

	// header background change
	var header = $('.header'),
		banner = $('.banner-slider'),
		scrollTop;

	$('.pusher > .inner').on('scroll', function() {
		if( !header.hasClass('solid-bg') && $(this).scrollTop() > banner.height() ) {
			header.addClass('solid-bg');
		} else if( header.hasClass('solid-bg') && $(this).scrollTop() <= banner.height() ){
			header.removeClass('solid-bg');
		}
	});

	var recipiesCarousel = $('.recipies-carousel').owlCarousel({
		autoplay: true,
		autoplayTimeout: 6000,
		dots: true,
		margin: 20,
		responsive: {
			0: { items: 1 },
			768: { items: 2 },
			992: { items: 3 },
			1300: { items: 4 },
		}
	});

	var offCanvas = function() {
		var navIcon = $('.nav-icon'),
			pusher  = $('.pusher'),
			canvas  = $('.off-canvas');

		navIcon.on('click', function(e) {
			e.preventDefault();

			navIcon.toggleClass('active');
			pusher.toggleClass('push');
			canvas.toggleClass('active');
		});
	};

	offCanvas();

	var techImgSlider = $('.tech-img').owlCarousel({
		controls: false,
		dots: false,
		items: 1
	});

	var techInfoSlider = $('.tech-info').owlCarousel({
		controls: false,
		dots: false,
		items: 1,
	});

	var techCarousel = $('.tech-carousel ul').owlCarousel({
		controls: false,
		margin: 30,
		dots: false,
		responsive: {
			0: { items: 1 },
			480: { items: 2 },
			600: { items: 3 }
		}
	});

	$('.tech-carousel ul').on('click', 'li', function(e) {
		e.preventDefault();

		if($(this).hasClass('active')) return;

		var $this = $(this),
			index = parseInt($this.attr('data-index')) - 1;

		$this.closest('ul').find('li').removeClass('active');
		$this.addClass('active');

		techInfoSlider.trigger('to.owl.carousel', [index, 500, true]);
		techImgSlider.trigger('to.owl.carousel', [index, 500, true]);
	})
	.parent().find('> .material-icons').on('click', function(e) {
		e.preventDefault();

		var ev;

		if($(this).hasClass('prev')) {
			ev = 'prev.owl.carousel';
		} else if($(this).hasClass('next')) {
			ev = 'next.owl.carousel';
		}

		techCarousel.trigger(ev);
	});

	// lazyloading background images
	$('.lazy').lazyload({
		effect: 'fadeIn',
		container: $('.pusher > .inner')
	});
})(jQuery, window, document);