
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



//dropdown menu 

	$('.fuckyou').click(function(){
			$('#nav-icon4').toggleClass('open');

				$(".headerMenu").toggleClass('dropdown');
				// $('.borderWhite').toggle();
				// $(".fa-bars").toggleClass('fa-borderss');
				$(".headerMenu a").on("click", function(){
				// console.log('fuckyou');
				$(".headerMenu").hide();


				$("hamburger").hover(function() {
				    $(this).css("cursor", "pointer");
				}, function() {
				    $(this).css("", "");
				});

			});	

		});
	$(".headerMenu a").on("click", function(){
			$('#nav-icon4').toggleClass('open');
		setTimeout(function() {
			$(".fa-bars").removeClass('fa-borderss');
			// $(".fa-bars").addClass('hamburger');

			
		});	

		});

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