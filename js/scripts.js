
	$(document).ready(function(){
	
	$('.bxslider').bxSlider({
	  mode: 'fade',
	  captions: true
	  
	});

// Find the toggles and hide their content
	$('.toggle').each(function(){
		$(this).find('.toggle-content').hide();
	});

	// When a toggle is clicked (activated) show their content
	$('.toggle .toggle-trigger').click(function(){
		var el = $(this), parent = el.closest('.toggle');

		if( el.hasClass('active') )
		{
			parent.find('.toggle-content').slideToggle();
			el.removeClass('active');
		}
		else
		{
			parent.find('.toggle-content').slideToggle();
			el.addClass('active');
		}
		return false;
	});





	// $('button').on('click', function() {

	// 	var line = $(this).find('.line2');
	// 	line.toggleClass('visHidden');
		
	// 	$('button').not(this).next('.boxToggleHeader').slideUp('toggleInfo');
	// 	 $(this).next('.boxToggleHeader').slideToggle('toggleInfo');


	// 	var body = $('.boxToggleHeader').next();

	// 	body.slideToggle('toggleInfo');
		
	// 	// $('.artistMain').toggleClass('toggleInfo');

	// });

//Archives Page
	$('.archivesArtistList').on('click', function() {
		event.preventDefault();
		$('.artistArchiveToggle').removeClass('away');

		$('h2.underlineYear').removeClass();

		$('#hartist').addClass('underlineArtist');

		$('.yearArchiveToggle').addClass('awayAway');


		

	});

	$('.archivesYearList').on('click', function() {
		event.preventDefault();
		$('.artistArchiveToggle').addClass('away');

		$('div.yearArchiveToggle').removeClass('awayAway');

		$('#hartist').removeClass('underlineArtist');

		$('#hyear').addClass('underlineYear');

		

	});


});