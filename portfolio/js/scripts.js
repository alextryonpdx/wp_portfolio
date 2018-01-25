(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away

		menu();
		
	});
	
})(jQuery, this);



function menu(){
	// mobile menu clicks
	$('#burger').on('click', function(){ 
		if( ! $('#burger').parents('#menu').hasClass('open') ){
			// $('#menu-mobile').css('display','inline-flex')
			// .hide()
			// $('body').css('position', 'fixed');
			// $('html').css('position', 'fixed');
			$('#burger').parents('#menu').toggleClass('open');
			// $('#menu-mobile').fadeIn(300, function(){
			// 	$('#menu-mobile li').animate({opacity: 1}, 400);
			// });
			
		} else {
			// $('body').css('position', 'relative');
			// $('html').css('position', 'relative');
			$('#burger').parents('#menu').toggleClass('open');
			// $('#menu-mobile').fadeOut();
			// $('body').css('overflow', 'auto');
			// $('#menu-mobile li').css('opacity',0);
			
			}
		
	});
	// $('.open').on('click', function(){ 
		
	// 	// $('.wrapper').css('position', 'relative');
	// });
}





