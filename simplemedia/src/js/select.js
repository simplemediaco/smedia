/*
 *  selectjs - v0.0.1
 *  Plugin developed by June Leoman Lapera
 *
 *  http://jqueryboilerplate.com
 *  Made by Zeno Rocha
 *  Under MIT License
 */
// the semi-colon before function invocation is a safety net against concatenated
// scripts and/or other plugins which may not be closed properly.
;( function( $, window, document, undefined ) {

	"use strict";

		// undefined is used here as the undefined global variable in ECMAScript 3 is
		// mutable (ie. it can be changed by someone else). undefined isn't really being
		// passed in so we can ensure the value of it is truly undefined. In ES5, undefined
		// can no longer be modified.

		// window and document are passed through as local variable rather than global
		// as this (slightly) quickens the resolution process and can be more efficiently
		// minified (especially when both are regularly referenced in your plugin).

		// Create the defaults once
		var pluginName ='select',
			defaults = {
				class: 'custom-class'
			};

		// The actual plugin constructor
		function Plugin ( element, options ) {
			this.element = element;

			// jQuery has an extend method which merges the contents of two or
			// more objects, storing the result in the first object. The first object
			// is generally empty as we don't want to alter the default options for
			// future instances of the plugin
			this.settings = $.extend( {}, defaults, options );
			this._defaults = defaults;
			this._name = pluginName;
			this.init();
		}

		// Avoid Plugin.prototype conflicts
		$.extend( Plugin.prototype, {
			init: function() {
				// Place initialization logic here
				// You already have access to the DOM element and
				// the options via the instance, e.g. this.element
				// and this.settings
				// you can add more functions like the one below and
				this.cacheDOM();
				this.bindEvents();
				this.addIds();
				this.create();
				this.render();
			},
			cacheDOM: function cacheDOM() {
				this.select = $(this.element);
				this.parent = this.select.parent();
				this.options = this.select.children();
				this.selectWrap = this.parent.find('.select__wrap');
				this.defaultItem = this.parent.find('.select__default');
			},
			bindEvents: function() {
				this.defaultItem.on('click', this.defaultItemClickHandler.bind(this));
				this.selectWrap.on('click', '.select__item', this.selectWrapClickHandler.bind(this));
			},
			defaultItemClickHandler: function() {
				this.selectWrap.addClass('open');
				this.parent.addClass('open');
			},
			selectWrapClickHandler: function(e) {
				this.selectWrap.removeClass('open');
				this.parent.removeClass('open');

				var selectedItemText = $(e.target).text();
				this.defaultItem.text(selectedItemText);

				// reset selected option
				this.options.removeAttr('selected');
				// set the new one
				var optionId = $(e.target).data('id');
				var filteredOption = this.options.filter($('.' + optionId));
				filteredOption[0].setAttribute('selected', '');
			},
			addIds: function() {
				if (this.options && typeof this.options === 'object') {
					$.map(this.options, function(val, i) {
						$(val).addClass('option-' + i);
					});
				}
			},
			create: function() {
				this.fakeOptions = [];

				if (this.options && typeof this.options === 'object') {
					$.map(this.options, function(val, i) {
						var temp = $('<div></div>').text($(val).text());
						temp.addClass('select__item');
						temp.attr('data-id', 'option-' + i);

						if ($(val).filter(':selected').length) {
							temp.addClass('selected');
						}

						this.fakeOptions.push(temp);
					}.bind(this));
				}
			},
			setDefault: function() {
				if (this.selectWrap.length && typeof this.selectWrap === 'object') {
					var temp = this.selectWrap.find('.selected');

					if (this.defaultItem.length) {
						this.defaultItem.text(temp.text());
					}
				}
			},
			render: function() {
				// hide the orignal select
				this.select.hide();

				// add fake option item to select wrap
				this.selectWrap.append(this.fakeOptions);

				// set the default option item
				this.setDefault();
			}
		} );

		// A really lightweight plugin wrapper around the constructor,
		// preventing against multiple instantiations
		$.fn[ pluginName ] = function( options ) {
			return this.each( function() {
				if ( !$.data( this, 'plugin_' + pluginName ) ) {
					$.data( this, 'plugin_' +
						pluginName, new Plugin( this, options ) );
				}
			} );
		};

} )( jQuery, window, document );