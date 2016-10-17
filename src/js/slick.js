(function($) {

	'use strict';

	// cache DOM
	// banner
	var $slideNav = $('.slide-nav.js');

	// testimonial
	var $slickTestimonial = $('.slick-testimonial.js');

	render();

	/**
	 * [render]
	 * @return {void}
	 */
	function render() {
		// banner slick
		$slideNav.slick({
			autoplay: true,
			arrows: false,
			fade: true,
			autoplaySpeed: 6000,
			adaptiveHeight: true
		});

		// testimonial slick
		$slickTestimonial.slick({
			arrows: false,
			autoplay: true,
			autoplaySpeed: 6000,
			adaptiveHeight: true
		});
	}

})(jQuery);