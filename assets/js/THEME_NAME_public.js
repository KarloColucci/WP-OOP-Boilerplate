(function ($) {
	'use strict';


	$(function () {


		/*** Public side JS Code here ***/

		/*Dropdown anim*/
		$('.js-toggle-hamburger').click(function (event) {
			event.preventDefault();
			$('.mobile-menu-wrapper').slideToggle();
			$(this).toggleClass('hamburger-open');
		})
	});

	/* Fix : do not display title when svg img refreshing */
	if ($('.site-logo img')) {
		$('.site-title-menu').hide();
	}

})(jQuery);