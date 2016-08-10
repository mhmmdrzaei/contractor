
	$(document).ready(function(){
	
	$('.bxslider').bxSlider({
	  mode: 'fade',
	  captions: true
	  
	});


	$('button.artists').on('click', function() {

		var line = $(this).find('.line2');
		line.toggleClass('visHidden');
		
		$('.artistMain').toggleClass('toggleInfo');

	});


});