$(document).ready(function() {				
	//Date picker
	$( "#datepicker" ).datepicker();
	$( "#datepicker1" ).datepicker();
		
	//inar-details
	$(".feedback").click(function(){
        $("#myModal").modal();
    });	
	
	//home
	$(".ad_btn").click(function(){
		$('.ad_search').slideToggle();
	});
	
	//common
	$(".top_menu li>a").click(function(){
		if($(this).next('.t_sub').hasClass('active')){
			$(this).next('.t_sub').removeClass('active');
			$(this).next('.t_sub').slideUp();
		}else{
			$(this).next('.t_sub').addClass('active');
			$(this).next('.t_sub').slideDown();		
		}
	});

	$('.i_box >a').click(function(){
		$(this).next('.tool').fadeToggle();
		
		setTimeout(function(){
		  $('.tool').fadeOut();
		}, 2000);
		return false;
	});	
	
	$('.i_box >a').click(function(){
		
		$(this).next('.m_box').fadeToggle();
		return false;
	});	
		
	$('.m_box .close').click(function(){
		$('.m_box').fadeOut();
		return false;
	});	
	
	// responsive navbar
/*	$('.navbar-toggle').click(function(e){
	$('.top_menu > ul').slideToggle("1000");
	});
	//
	$('.myaccount').click(function() {
		$('.myacc-panel').toggle("slow");
	});*/
	//	



//listing page	
	$(".Sort_p > span").click(function(){
		$('.Sort_p > span').removeClass('active');
		$(this).addClass('active');
	});
	
	$(".list_v").click(function(){
		$('.rc').removeClass('active');
		$(this).addClass('active');
		$('.l_box').removeClass('v_grid').addClass('v_list');
	});
	$(".grid_v").click(function(){
		$('.rc').removeClass('active');
		$(this).addClass('active');
		$('.l_box').removeClass('v_list').addClass('v_grid');
	});	
	
//list left panel	
	$(".list_filter_mn").click(function(){
		if($('.l_pan').hasClass('close_P')){
			$(this).children('.list_filter_handelar').html('<i class="fa fa-arrow-right"></i>');
			$('.l_pan').removeClass('close_P').addClass('open_p');
			$('.r_pan').removeClass('one_cole').addClass('two_col');			
		}else{
			$(this).children('.list_filter_handelar').html('<i class="fa fa-arrow-left"></i>');
			$('.l_pan').removeClass('open_p').addClass('close_P');
			$('.r_pan').removeClass('two_col').addClass('one_cole');
		}
	});	
	

//Listing Details

	$(".dt_menu li a").click(function() {
		//alert($(this).attr('data-type'));
		$(".dt_menu li a").removeClass('active');
		$(this).addClass('active');
		$('html, body').animate({
			scrollTop: $('#'+$(this).attr('data-type')).offset().top-350
		}, 2000);
	});	




//Timeline	
	$('.timeline >li a').click(function(){
		$('.timeline >li a').removeClass('active');
		$(this).addClass('active');
		
		$("html, body").animate({scrollTop: $('.'+$(this).attr('data-type')).offset().top-190}, 2000);
		
		return false;
	});
	
	$('.a_title').click(function(){
		if(!$(this).hasClass('active')){
			$(this).addClass('active');
			$(this).next('.a_con').slideUp();
		}else{
			$(this).removeClass('active');
			$(this).next('.a_con').slideDown();
			
		}
	});
	

	
	}); // Document ready Close
	
	
	

$(window).scroll(function() {   

//detail top fixd	
    if ($(window).scrollTop() > 100 ) {
        $(".d_fixed").addClass("fixed");
    }else{
		
		$(".d_fixed").removeClass("fixed");
	}


//Timeline fixd
	var offset = $(".sedule_con").offset().top;
	var posY = offset - $(window).scrollTop();
	var sd_h =$(".sedule_con").outerHeight();
	var offB =sd_h-450;

	
    if (posY < 200 && posY >-offB ) {
        $(".timeline").addClass("strick");
    }else{
		
		$(".timeline").removeClass("strick");
	}
}); 

	//Owl Slider
	$('.home-slider').owlCarousel({
	loop:true,	
    animateOut: 'fadeOut',
    items:1,
	autoplay:true,
	autoplayTimeout:5000
	})
	
	
	// Select box		
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
	if($(selector).length>0)	
		
      $(selector).chosen(config[selector]);
    }	