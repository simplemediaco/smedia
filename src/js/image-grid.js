(function($) {

	'use strict';
	
	// cache DOM
	var $imageGrid = $('.image-grid.js');

	// render onload
	render();
	
	/**
	 * [render]
	 * @return {void}
	 */
	function render() {
		var $masonry = $imageGrid.isotope({
			itemSelector: '.image-grid__item',
			percentPosition: true,
			masonry: {
				columnWidth: '.image-grid__item-sizer'
			}
		});

		$masonry.imagesLoaded().progress(function () {
			$masonry.isotope('layout');
		});
	}

})(jQuery);