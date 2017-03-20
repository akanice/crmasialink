$(window).scroll(function() {
    // if ($(".act-navfix").offset().top > 50) {
        // $(".act-navfix").addClass("top-nav-collapse");
    // } else {
        // $(".act-navfix").removeClass("top-nav-collapse");
    // }
});
$(document).ready(function() {
	//smooth scroll to anchor
	$(".scroll").click(function(event){
		event.preventDefault();
		//calculate destination place
		var dest=0;
		if($(this.hash).offset().top > $(document).height()-$(window).height()){
			dest=$(document).height()-$(window).height()-100;
		}else{
			dest=$(this.hash).offset().top-100;
		}
	//go to destination
	$('html,body').animate({scrollTop:dest}, 1000,'swing');
	});

	$("#maichauNav").affix({
		offset: { 
			//top: ($("#slideshow").outerHeight() + 30)
			top: ($('#header-top').height() + $('#logo-wrapper').height() + 150)
		}
	});
	
	var tab_content_tour_height_top = $('#header-top').height() + $('#logo-wrapper').height() + $('.breadcrumbs').height() + 30 + $('h1.tour-heading').height() + 20 + $('.tour-cover').height() + 25;
	var tab_content_tour_height_bottom = $('#related-tour').outerHeight() + $('.promo-banner').outerHeight() + $('footer').outerHeight() + 200;
	alert(tab_content_tour_height_bottom);
	$("#tab-content-tour").affix({
		offset: { 
			//top: ($("#slideshow").outerHeight() + 30)
			top: tab_content_tour_height_top,
			bottom: tab_content_tour_height_bottom,
		}
	})
	
	//Owl Carousel
	
	$("li.dropdown").hover(function() {
			$(this).toggleClass('open');
	});
	$(".owl-next").click(function(){
		owl.trigger('owl.next');
	})
	$(".owl-prev").click(function(){
		owl.trigger('owl.prev');
	})	
	
	$('#tab-content-tour li').click(function() {
		$('#tab-content-tour li').removeClass('active');
		$(this).addClass('active');
	})
	// $("#owl-customers").owlCarousel({
		// items: 2,
		// navigation : false, // Show next and prev buttons
		// slideSpeed : 300,
		// paginationSpeed : 400,
		// itemsDesktop : [1199,2],
		// itemsDesktopSmall : [980,2],
		// itemsTablet: [768,1],
		// itemsTabletSmall: false,
		// itemsMobile : [479,1],
		// //singleItem:true,
	// });

	// var owl_customer_2 = $("#owl-customer-2");
	// owl_customer_2.owlCarousel({
		// items: 1,
		// navigation : false, // Show next and prev buttons
		// slideSpeed : 300,
		// //singleItem:true,
	// });
	// $(".slick_control").find('.next').click(function(){
		// owl_customer_2.trigger('owl.next');
	// })
	// $(".slick_control").find('.prev').click(function(){
		// owl_customer_2.trigger('owl.prev');
	// }) 

	//đặt tour
	$(".form_booking").submit(function(e) {
		$('#notification').show();
		e.preventDefault();
		var gender = $('#gender').val();
		var name = $('#name').val();
		var email = $('#email').val();
		var phone = $('#phone').val();
		var note = $('#note').val();
		var tour_name = $('#tour_name').val();
		var tour_id = $('#tour_id').val();
		$.ajax({
			type: "POST",
			url: site_url + 'ajax/booking',
			data: {name: name, email: email, phone: phone, note: note, tour_id: tour_id,gender: gender,tour_name: tour_name},
			cache: false,
			success: function(respone){
				var result = $.parseJSON(respone);
				$('#notification').hide();
				$('#success_order').modal('show');
			}
		});
	});
	
	//subscriber
	$("#sub_form").submit(function(e) {
		e.preventDefault();
		var email = $('#sub_email').val();
		if (email == '') {
			alert('Hãy nhập email của bạn để đăng ký nhận bản tin từ maichautourist.com');
			return true;
		} else {
			$.ajax({
				type: "POST",
				url: site_url + 'ajax/subscribe',
				data: {email:email},
				cache: false,
				success: function(respone){
					var result = $.parseJSON(respone);
					$('#sub_modal').modal('show');
				}
			});
		}
	});
	
	//hotels gallery
	$('#imageGallery').lightSlider({
		gallery:true,
		item:1,
		loop:true,
		thumbItem:6,
		slideMargin:0,
		enableDrag: false,
		currentPagerPosition:'left',
		onSliderLoad: function(el) {
			el.lightGallery({
				selector: '#imageGallery .lslide'
			});
		}   
	}); 
	
	$('.dropdown').on('show.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
  });

  // ADD SLIDEUP ANIMATION TO DROPDOWN //
  $('.dropdown').on('hide.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
  });
}); 

	
	