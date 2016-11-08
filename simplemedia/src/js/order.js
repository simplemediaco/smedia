(function($) {

	// checkboxOne DOM
	var $checkboxOne = $('.checkbox-one');

	// checkboxTwo DOM
	var $checkboxTwo = $('.checkbox-two');

	// range slider DOM
	var $slider = $('input[type="range"]');

	// radio DOM
	var $radio = $('.radio');

	// select DOM
	var $select = $('select');

	// add more page
	var $addMorePage = $('.add-more-page');

	// order toggle nav
	var $orderToggle = $('.order-nav.js');

	// order heading
	var $orderHeading = $('.order-heading.js');
	
	render();
	init();

	/**
	 * [init will initialize all needed functions]
	 * @return {void}
	 */
	function init() {
		bindEvents();
	}

	/**
	 * [bindEvents]
	 * @return {void}
	 */
	function bindEvents() {
		$orderToggle.on('click', '.order-nav__item', orderToggleHandler);
	}

	/**
	 * [orderToggleHandler]
	 * @return {void}
	 */
	function orderToggleHandler() {
		var _self = $(this);

		// remove all active class
		_self.closest('.order-nav').find('.order-nav__item').removeClass('active');

		// add active class if not set
		if (_self.hasClass('active') && _self.length) {
			_self.removeClass('active');
		} else {
			_self.addClass('active');
		}

		// show/hide order-service
		if (_self.length) {
			// hide all order-service
			$('.order-service').hide();

			// show current active service
			$('#' + _self.data('service')).show();
		}

		// show/hide title
		if ($orderHeading.length) {
			// get data title
			var serviceHeading = _self.data('title');
			$orderHeading.text(serviceHeading);
		}
	}

	/**
	 * [render]
	 * @return {void}
	 */
	function render() {
		// checkboxOne render
		$checkboxOne.checkboxOne();
		
		// checkboxTwo render
		$checkboxTwo.checkboxTwo();

		// render radio
		$radio.radio();

		// render select
		$select.select();

		// render addMorePage
		$addMorePage.addMorePage();

		// range slider render
		if ($slider.length) {
			rangeSlider.create($slider, {
				polyfill: true,
				onInit: function() {
					//$sliderResult.text(this.value);
					this.rangeResultEl = $(this.element).parent().find('.range-slider-result');
					this.rangeResultEl.text(this.value);
				},
				onSlide: function(position, value) {
					this.rangeResultEl.text(this.value);
				}
			});
		}
	}

})(jQuery);