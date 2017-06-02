;(function($, window, document, undefined) {
	'use strict';


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


})(jQuery, window, document);