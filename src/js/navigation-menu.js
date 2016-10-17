(function($) {

	'use strict';

	// cache DOM
	var $navigation = $('.navigation');
	var $hamburgerButton = $('.navigation__hamburger.js');
	var $navigationMenu = $('.navigation__menu.js');
	var $body = $('body');

	// bind events
	$hamburgerButton.on('click', hamburgerButtonHandler);

	/**
	 * [hamburgerButtonHandler]
	 * @return {void}
	 */
	function hamburgerButtonHandler() {
		$hamburgerButton.toggleClass('open');
		$navigationMenu.toggleClass('open');

		if ($body.hasClass('open')) {
			$body.removeClass('open');
			$navigation.removeClass('open');
			$body.css('overflow', 'auto');
		}
		else {
			$body.addClass('open');
			$navigation.addClass('open');
			$body.css('overflow', 'hidden');
		}
	}

})(jQuery);