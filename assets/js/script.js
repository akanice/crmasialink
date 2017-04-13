$(document).ready(function() {
	var owl = $('#owl-carousel');
	owl.owlCarousel({
		items:6,
		loop:true,
		margin:10,
		autoplay:true,
		autoplayTimeout:1500,
		autoplayHoverPause:true,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
			},
			600:{
				items:3,
			},
			1000:{
				items:5,
			}
		}
	});
	// $('.play').on('click',function(){
		// owl.trigger('play.owl.autoplay',[1000])
	// })
	// $('.stop').on('click',function(){
		// owl.trigger('stop.owl.autoplay')
	// })
	
	var owl2 = $('#carousel-projects');
	owl2.owlCarousel({
		items:4,
		loop:true,
		margin:10,
		autoplay:true,
		autoplayTimeout:1500,
		autoplayHoverPause:true,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
			},
			600:{
				items:3,
			},
			1000:{
				items:4,
			}
		}
	});
	$('.play').on('click',function(){
		owl2.trigger('play.owl2.autoplay',[1000])
	})
	$('.stop').on('click',function(){
		owl2.trigger('stop.owl2.autoplay')
	})
}); 


