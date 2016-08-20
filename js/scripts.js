
	$(document).ready(function(){
	
	$('.bxslider').bxSlider({
	  mode: 'fade',
	  captions: true,
	  auto: true
	  
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

	//the MODAL
	// Get the modal
	var modal = document.getElementById('myModal');

	// Get the image and insert it inside the modal - use its "alt" text as a caption
	var img = document.getElementById('myImg');
	var modalImg = document.getElementById("img01");
	var captionText = document.getElementById("caption");
	img.onclick = function(){
	    modal.style.display = "block";
	    modalImg.src = this.src;
	    modalImg.alt = this.alt;
	    captionText.innerHTML = this.alt;
	}

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() { 
	  modal.style.display = "none";
	}


});