/*
* Since you can't use pseduo-elements on `<select>`s, this module creates a wrapper
*/
(function($){
	'use strict';

	function wrapSelects() {

		// Cache 'em!
		var selects = $('.form-select');

		// Wrap them all
		selects.wrap('<div class="form-select__wrapper" />');

		// Loop through each one
		selects.each(function(){

			// Add a class for multiselects
			if ( $(this).attr('multiple') != 'undefined' && $(this).attr('multiple') == 'multiple' ) {
				$(this).parent().addClass('form-select--multiple');
			}

		});
	}

	$(document).on('ready', wrapSelects);

})(jQuery);
