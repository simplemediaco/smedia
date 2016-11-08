/*
 *  add-more-page - v0.0.1
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
		var pluginName ='addMorePage',
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
				this.container = $(this.element);
				this.cacheDOM();
				this.bindEvents();
				this.count = 0;
			},
			cacheDOM: function() {
				this.item = this.container.find('.add-more-page__item');
				this.button = this.container.find('.add-more-page__button');
			},
			bindEvents: function() {
				this.button.on('click', this.addMoreClickHandler.bind(this));
				this.container.on('click', '.add-more-page__minus', this.minusButtonHandler);
			},
			addMoreClickHandler: function() {
				var cloned = this.item.eq(0).clone(),
					input = cloned.find('input');

				this.count = this.count + 1;
				input.val('');
				input.attr('name', 'new-page-' + this.count);
				this.button.before(cloned);
			},
			minusButtonHandler: function() {
				$(this).parent().remove();
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