(function($) {

	// cache DOM
	var $accordion = $('.accordion.js');

	// bind events
	$accordion.on('click', '.accordion__title', accordionHandler);

	init();

	/**
	 * [init]
	 * @return {void}
	 */
	function init() {
		var $accordionTitle = $('.accordion__title.open');

		$.map($accordionTitle, function(val, i) {
			var _self = $(val);

			if (_self.hasClass('open')) {
				var $contentWrap = _self.next();
				var contentHeight = getContentHeight($contentWrap);
				$contentWrap.css('height', contentHeight);
			}
		});
	}

	/**
	 * [accordionHandler]
	 * @return {void}
	 */
	function accordionHandler() {
		var _self = $(this);
		var $contentWrap = _self.next();
		var contentHeight = getContentHeight($contentWrap);

		if (_self.hasClass('open')) {
			_self.removeClass('open');
			$contentWrap.css('height', 0);
		} else {
			_self.addClass('open');
			$contentWrap.css('height', contentHeight);
		}
	}

	/**
	 * [getContentHeight get the height of the content container]
	 * @param  {dom} elem
	 * @return {int}
	 */
	function getContentHeight(elem) {
		return elem.find('.accordion__content').outerHeight();
	}

})(jQuery);