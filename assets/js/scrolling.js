(function($) {
	$(document).on('click', '.menu .menu-item a', function() {
		var menuItemLink = $(this).attr('href'),
			scrollTo,
			linkParts,
			scrollTop;
			
		if (menuItemLink.indexOf('#') > -1) {
			linkParts = menuItemLink.split('#');
			scrollTo = $('#' + linkParts[1]);
			scrollTop = scrollTo.offset().top - 120;
			
			$('html, body').animate({
				scrollTop: scrollTop
			}, 1000);
			
			return false;
		} else {
			return true;
		}
	});
})(jQuery);