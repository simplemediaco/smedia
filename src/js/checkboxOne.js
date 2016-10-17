/*
 *  checkboxjs - v0.0.1
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
		var pluginName ='checkboxOne',
			defaults = {
				label: 'Default value',
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
				this.checkbox = $(this.element);
				this.renderCheckbox();
				this.cacheDOM();
				this.bindEvents();
			},
			renderCheckbox: function renderCheckbox() {
				// hide the real checkbox
				this.checkbox.hide();
				
				// generate fake checkbox with label
				var classes = this.checkbox.data('class') || this._defaults.class;
				var parent = $('<div class="checkbox"></div>').addClass(classes);
				var square = $('<span class="checkbox__square"><svg width="12" height="9" viewBox="0 0 12 9" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M.914 5.34l2.831 2.83L10.973.944"/></svg></span>');

				// set text label if available else set the text default label
				var dataLabel = this.checkbox.data('label');
				var labelTxt = dataLabel || this._defaults.label;
				var labelEl = $('<span class="checkbox__label"></span').text(labelTxt);

				// append to parent and place after the real checkbox
				parent.append(square);
				parent.append(labelEl);
				this.checkbox.after(parent);
			},
			cacheDOM: function cacheDOM() {
				this.fakeCheckbox = this.checkbox.next();
				this.checkboxSquare = this.fakeCheckbox.find('.checkbox__square');
				this.checkboxLabel = this.fakeCheckbox.find('.checkbox__label');
			},
			bindEvents: function bindEvents() {
				this.checkboxSquare.on('click', this.checkboxSquareToggle.bind(this));
				this.checkboxLabel.on('click', this.checkboxSquareToggle.bind(this));
			},
			checkboxSquareToggle: function checkboxSquareToggle() {
				if (this.checkboxSquare.hasClass('checked')) {
					this.checkboxSquare.removeClass('checked');
					this.checkbox.removeAttr('checked');
				} else {
					this.checkboxSquare.addClass('checked');
					this.checkbox.attr('checked', 'checked');
				}
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