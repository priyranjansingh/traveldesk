@extends('front_master')
@section('content')
<!--Content-->
<div class="content_pan">
	<div id="goToTop">
    	<i class="fa fa-arrow-up"></i>
        Top
    </div>
	<div class="floatmenu">
    	<div class="i_box">
        	<a href="#"><i class="fa fa-phone"></i></a>
            <ul class="social-share">
            <li>
              <i class="fa fa-phone"></i>
            </li>
            <li class="text-center call-us ng-binding">
             Call us at 1860 200 1800
            </li>
          </ul>
        </div>
        <div class="i_box">
        	<a class="feedback" href="#myModal"><i class="fa fa-commenting"></i></a>
        </div>
        <div class="i_box"><a href="#"><i class="fa fa-star"></i></a>
        	<div class="tool">
            	You have not shortlisted any Package. Choose atleast two packages for comparsion.
            </div>        
        </div>
        <div class="i_box">
        	<a href="#"><i class="fa fa-share-alt"></i></a>
            <ul class="social-share">
                <li>Share On: </li>
                <li>
                  <a title="Google" href="#"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                  <a title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a title="Email" href="#"><i class="fa fa-envelope"></i></a>
                </li>
            </ul>        
        </div>
        <div class="i_box">
        	<a href="#" title="View Favourites"><i class="fa fa-thumbs-up"></i></a>
        	<div class="m_box">
            	<span class="close"><i class="fa fa-times-circle"></i></span>
                <p>Now you can save your favourite packages to view them later.</p>
                
            </div>
        </div>        
        
    </div>
<!---->

<!--Search box-->
 <div class="inner_search_bar">
 	<div class="wraper">
    	<ul class="row s-menu">
          <li class="ico_p"><i class="fa fa-globe "></i></li>
          <li>
            <i class="fa fa-map-marker"></i>
            <input type="text" class="tbox" />
          </li> 
          <li>
            <i class="fa fa-map-marker"></i>
            <input type="text" class="tbox" />
            </li>
          <li>
          	<i class="fa fa-calendar"></i>
			<input type="text" class="tbox" id="datepicker" />
          </li>
          <li><input type="submit" class="btn_search bg_yellow fc_black" value="SEARCH"></li>
        </ul>
    </div>
 </div>   
<!--Search box--> 

      <div class="wraper">
        <div class="row">
        <ul class="page-breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">list</a></li>
            <li>list Detail</li>
        </ul>
        </div>
     </div>
 
<div class="d_fixed">
    <div class="wraper">
        
        <div class="row">
            <div class="col-9">
                <div class="row d_top">
                    <div class="col-9">
                        <h1 class="fw600 marb15 d_titel">{{$package->package_title}}.</h1>
                        <div class="res_hide">Seller : My Travel Desk <span class="bg_black fc_white btn_small">{{$package->totalnight}} Nights </span></div>
                    </div>
                    <div class="col-13">
                                <div class="sf">Starting From</div>
                                <h2 class="fw800"><i class="rup">₹</i>{{$package->package_cost}}</h2>
                    </div>            	
                </div>
            </div>    
            <div class="col-3 res_hide">
                        <div class="book_p"><a href="#" class="btn_big bg_yellow fc_black">Book Now</a> <span class="dib">OR</span> <h4 class="dib fw400"> Call us at: <strong>9477077777</strong></h4></div>
                      <!--  <p>You can now directly communicate with the Seller of this package.</p> -->
            </div>
        </div>
        
        <div class="dt_menu">
        	<ul>
            	<li><a href="#photos" class=" active">Photos</a></li>
                <li><a href="#hotels">Hotels</a></li>
                <li><a href="#inclusions">Inclusions</a></li>
                <li><a href="#detailed">Detailed Itinerary</a></li>
                <li><a href="#about">About the Place</a></li>
            </ul>
        </div>
    </div>
</div> 
<div class="wraper detail_p"> 
	<section id="photos">     
    <div class="row">
    	<div class="col-9">
        	<div class="detail_slider ">
            <div class="big-images">
                @foreach ($package_gallery as $img_gallery)
                <div class="item"><img src="{{url('/images/package_gallery/'. $img_gallery->image_name) }}"></div>  
                @endforeach
                
            </div>
            <div class="thumbs">
                @foreach ($package_gallery as $img_gallery)
                <div class="item"><img src="{{url('/images/package_gallery/'. $img_gallery->image_name) }}"></div>    
                @endforeach
                
            </div>  
            </div>
        </div>
		<div class="col-3">
          <div class="box">
          <h5 class=" fw600 marb5"><i class="fa fa-sliders"></i> Independent Tour</h5>
          <p>Customisable itineraries where you may choose transport, stay & sightseeing as per your taste & comfort</p>
          </div>
          <div class="box">
          <h5 class="fw600 marb5"><i class="fa fa-home"></i> Stay Plan</h5>
           <p>Delhi - 2 Nights<br />
			Agra - 1 Night<br />
			Jaipur - 2 Nights</p>
           </div> 
           <div class="box">
            <div class="clear">
            	<div class="fl pad15 bg_ash marr15"><i class="fa fa-thumbs-up"></i></div>
                <div class="fl">
                	<h3 class=" fw600">Favourite 3 Star</h3>
                    <div class=" fc_yellow"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div>
                </div>
            </div>
            <p>Favourite of 1 people | <a href="#"> Add to your list!</a></p>
            </div>
        </div>
    </div>
    
    <div class="row res_inc">
        <div class="col-5">
            <h5 class="fw600 mart15">Inclusions</h5>
            <ul class="facility_in clear">
                @foreach ($package_inclusions as $package_inclusion)
                <li><i class="fa {{ $package_inclusion->css_class != '' ? $package_inclusion->css_class : 'fa-bed' }}"></i> <span>{{$package_inclusion->inclusion_title}}</span></li>
                @endforeach
            </ul>
            

        </div>
        <div class="col-7 devider">
            <h5 class="fw600 mart15">Themes</h5>
            <ul class="facility_in clear">
                @foreach ($package_themes as $package_theme)
                <li><i class="fa {{ $package_theme->css_class != '' ? $package_theme->css_class : 'fa-bed' }}"></i> <span>{{$package_theme->theme_title}}</span></li>
                @endforeach
            </ul>                    
        </div>
    </div>
    
    <div class="row h_devider">
    <div class="col-12">
    <h5 class="fw600 mart15">Overview</h5>
    <p class="overdet">
        {{$package->package_overview}}
    </p>
    </div>
    </div>
    </section>
    <section id="hotels"> 
    <div class="row">
    <div class="col-12">
    <h5 class="fw600 mart15">Package Itinerary</h5>
    <div class="p_itinerary ">
    	<div class="col-1">
        	<ul class="timeline">
            	<li><a href="#place_1"><span class="Day">Day-1</span></a></li>
                <li><a href="#place_2"><span class="Day">Day-2</span></a></li>
                <li><a href="#place_3"><span class="Day">Day-3</span></a></li>
            	<li><a href="#place_4"><span class="Day">Day-4</span></a></li>
                <li><a href="#place_5"><span class="Day">Day-5</span></a></li>
                <li><a href="#place_6"><span class="Day">Day-6</span></a></li>                
            </ul>
        </div>
    	<div class="col-11">
        	<div class="sedule_con">
            	<div class="a_title">
                	<div class="place">Delhi</div><div class="p_from">From: DAY-1 to DAY-2</div>
                </div>
                <div class="a_con">
                	<h4 id="place_1">DAY-1</h4>
                    <div class="day_p">
                    <div class="row">
                    	<div class="col-3">
                        	<div class="hotel_ico">
                            <h6>HOTEL</h6>
                            <p class="ithotel">CHECK IN FOR 2 NIGHTS</p>
                            </div>
                        </div>
                        <div class="col-9"><h6>Hotel Dakha International or similar</h6></div>
                    </div>
                    </div>
                    <div class="day_p">
                     <div class="row">
                    	<div class="col-3">
                            <div class="sightt_ico">
                            <h6>SIGHTSEEING</h6>
                            </div>
                        </div>
                        <div class="col-9">
                        	 <ul class="sight_list">
                             	<li>Lodhi Garden</li>
                                <li>India Gate</li>
                                <li>Lotus Temple</li>
                                <li>Jama Masjid</li>
                                <li>Qutab Minar</li>
                                <li>Parliament House</li>
                                <li>Humayun's Tomb </li>
                              </ul>  
                        </div>
                    </div> 
                    </div>                  
                 	<h4 id="place_2">DAY-2</h4>
                    <div class="day_p">
                    <div class="row">
                    	<div class="col-3">
                        	<div class="hotel_ico">
                            <h6>HOTEL</h6>
                            </div>
                        </div>
                        <div class="col-9"><h6>Hotel Dakha International or similar</h6></div>
                    </div>
                    </div>
                    <div class="day_p">
                     <div class="row">
                    	<div class="col-3">
                            <div class="sightt_ico">
                            <h6>SIGHTSEEING</h6>
                            </div>
                        </div>
                        <div class="col-9">
                        	 <ul class="sight_list">
                             	<li>Lodhi Garden</li>
                                <li>India Gate</li>
                                <li>Lotus Temple</li>
                                <li>Jama Masjid</li>
                                <li>Qutab Minar</li>
                                <li>Parliament House</li>
                                <li>Humayun's Tomb </li>
                              </ul>  
                        </div>
                    </div> 
                    </div>                    
                </div>
                
            	<div class="a_title">
                	<div class="place">Agra</div><div class="p_from">From: DAY-3</div>
                </div>
                <div class="a_con">
                	<h4 id="place_3">DAY-3</h4>
                    <div class="day_p">
                    <div class="row">
                    	<div class="col-3">
                        	<div class="hotel_ico">
                            <h6>HOTEL</h6>
                            <p class="ithotel">CHECK IN FOR 2 NIGHTS</p>
                            </div>
                        </div>
                        <div class="col-9"><h6>Hotel Dakha International or similar</h6></div>
                    </div>
                    </div>
                    <div class="day_p">
                     <div class="row">
                    	<div class="col-3">
                            <div class="sightt_ico">
                            <h6>SIGHTSEEING</h6>
                            </div>
                        </div>
                        <div class="col-9">
                        	 <ul class="sight_list">
                             	<li>Lodhi Garden</li>
                                <li>India Gate</li>
                                <li>Lotus Temple</li>
                                <li>Jama Masjid</li>
                                <li>Qutab Minar</li>
                                <li>Parliament House</li>
                                <li>Humayun's Tomb </li>
                              </ul>  
                        </div>
                    </div> 
                    </div>                  
                 	<h4 id="place_4">DAY-4</h4>
                    <div class="day_p">
                    <div class="row">
                    	<div class="col-3">
                        	<div class="hotel_ico">
                            <h6>HOTEL</h6>
                            </div>
                        </div>
                        <div class="col-9"><h6>Hotel Dakha International or similar</h6></div>
                    </div>
                    </div>
                    <div class="day_p">
                     <div class="row">
                    	<div class="col-3">
                            <div class="sightt_ico">
                            <h6>SIGHTSEEING</h6>
                            </div>
                        </div>
                        <div class="col-9">
                        	 <ul class="sight_list">
                             	<li>Lodhi Garden</li>
                                <li>India Gate</li>
                                <li>Lotus Temple</li>
                                <li>Jama Masjid</li>
                                <li>Qutab Minar</li>
                                <li>Parliament House</li>
                                <li>Humayun's Tomb </li>
                              </ul>  
                        </div>
                    </div> 
                    </div>                    
                </div> 
                
            	<div class="a_title">
                	<div class="place">jaipur</div><div class="p_from">From: DAY-5</div>
                </div>
                <div class="a_con">
                	<h4 id="place_5">DAY-5</h4>
                    <div class="day_p">
                    <div class="row">
                    	<div class="col-3">
                        	<div class="hotel_ico">
                            <h6>HOTEL</h6>
                            <p class="ithotel">CHECK IN FOR 2 NIGHTS</p>
                            </div>
                        </div>
                        <div class="col-9"><h6>Hotel Dakha International or similar</h6></div>
                    </div>
                    </div>
                    <div class="day_p">
                     <div class="row">
                    	<div class="col-3">
                            <div class="sightt_ico">
                            <h6>SIGHTSEEING</h6>
                            </div>
                        </div>
                        <div class="col-9">
                        	 <ul class="sight_list">
                             	<li>Lodhi Garden</li>
                                <li>India Gate</li>
                                <li>Lotus Temple</li>
                                <li>Jama Masjid</li>
                                <li>Qutab Minar</li>
                                <li>Parliament House</li>
                                <li>Humayun's Tomb </li>
                              </ul>  
                        </div>
                    </div> 
                    </div>                  
                 	<h4 id="place_6">DAY-6</h4>
                    <div class="day_p">
                    <div class="row">
                    	<div class="col-3">
                        	<div class="hotel_ico">
                            <h6>HOTEL</h6>
                            </div>
                        </div>
                        <div class="col-9"><h6>Hotel Dakha International or similar</h6></div>
                    </div>
                    </div>
                    <div class="day_p">
                     <div class="row">
                    	<div class="col-3">
                            <div class="sightt_ico">
                            <h6>SIGHTSEEING</h6>
                            </div>
                        </div>
                        <div class="col-9">
                        	 <ul class="sight_list">
                             	<li>Lodhi Garden</li>
                                <li>India Gate</li>
                                <li>Lotus Temple</li>
                                <li>Jama Masjid</li>
                                <li>Qutab Minar</li>
                                <li>Parliament House</li>
                                <li>Humayun's Tomb </li>
                              </ul>  
                        </div>
                    </div> 
                    </div>                    
                </div>                                
            </div>
        </div>
    </div>
    </div>
    </div>
    </section>
    <section id="inclusions"> 
    <div class="row  h_devider">
        <div class="col-6">
            <h5 class="fw600 mart15">Inclusions</h5>
            
            {!! $package->inclusions !!}
        </div>
        <div class="col-6">
            <h5 class="fw600 mart15">Exclusions</h5>
            {!! $package->exclusions !!}
        </div>
    </div>

    <div class="row policy_p">
        <div class="col-6">
            <h5 class="fw600 mart15">Payment Policy</h5>
            <p><strong>Advance Booking Fee</strong></p>
            {!! $package->payment_policy !!}
            <p class="overdet"><strong>Important:</strong> The booking stands liable to be cancelled if 100% payment is not received less than 20 days before date of departure.</p>
        </div>
        <div class="col-6">
            <h5 class="fw600 mart15">Cancellation Policy</h5>
            <div class="scroll_p">
            <div class="exp min">
            <p class="overdet"><strong>If you Cancel your Holiday</strong></p>
            <p class="overdet">You or any member of your party may cancel their travel arrangements at any time. Written notification or an e-mail to that effect from the person who made the booking must be received at our office. The cancellation charges applicable are as per the published cancellation policy below:</p>
            <p class="mart15"><strong>Cancellation charges per person</strong></p>
                {!! $package->cancellation_policy !!}
            </div>
            </div> 
            <span class="more">More +</span>  
                                  
        </div>
    </div>
    </section>
    <section id="detailed"> 
    <div class="row h_devider">
    <div class="col-12">
    <h5 class="fw600 mart15">Detailed Day Wise Itinerary</h5>
    	<div class="exp min">
        {!! $package->detail_itinerary !!}
    	</div>
        <span class="more">More +</span>        
    </div>
    </div>    
    </section>
    <section id="about">
    <div class="row ">
    <div class="col-12">
    <h5 class="fw600 mart15 " id="about">About Agra</h5>
    <div class="about_p">
    <p class="overdet"><img src="{{url('/images/images/shutterstock_89543659~0.jpg') }}" class="fl marr15" width="200" /> Located in the north east of Rajasthan, state capital Jaipur is India' s tenth largest city, and one of its most popular tourist destinations. It is part of what is known as the country' s golden triangle of tourism that includes Delhi (260 km away) and Agra (240 km away). Known as the 'Pink City' it is also the gateway to the splendours of Rajasthan. Tourists arrive here and then make their way to the various historical cities around the state. It is the city of forts and palaces and was founded in 1727 by Maharaja Sawai Jai Singh II, the ruler of Amber, after whom it is named. Jai Singh had deep interests in sciences like astronomy, mathematics and astrophysics, and he had the city built on the principles of Shilpa Shastra, the ancient Indian science of architecture. It divided the city into nine blocks, two of which contain the state buildings and palaces, with the remaining seven </p>
    </div>
    </div>
    </div>
    </section>
    <div class="row">
    <div class="col-12">
    	<div class="bg_ash marb15 pad15">
    	<h5 class="fw600 mart15 tac" id="about">People who viewed this package also explored</h5>    
    	
        	<div class="owl-carousel-p">
  				<div class="item">
                	<img src="{{url('/images/images/01.jpg') }}" />
                    <div class="package_con">
                    	<h4>Kanha</h4>
                        <div class="clear">
                        	<div class="fl">Starting Price
                            <h5>â‚¹ 7,000</h5></div>
                            <a href="#" class="btn_small bg_yellow fr fc_white">View Details</a>
                        </div>
                    </div>
                </div>
  				<div class="item">
                	<img src="{{url('/images/images/02.jpg') }}" />
                    <div class="package_con">
                    	<h4>Kanha</h4>
                        <div class="clear">
                        	<div class="fl">Starting Price
                            <h5>â‚¹ 7,000</h5></div>
                            <a href="#" class="btn_small bg_yellow fr fc_white">View Details</a>
                        </div>
                    </div>
                </div>
  				<div class="item">
                	<img src="{{url('/images/images/03.jpg') }}" />
                    <div class="package_con">
                    	<h4>Kanha</h4>
                        <div class="clear">
                        	<div class="fl">Starting Price
                            <h5>â‚¹ 7,000</h5></div>
                            <a href="#" class="btn_small bg_yellow fr fc_white">View Details</a>
                        </div>
                    </div>
                </div>
  				<div class="item">
                	<img src="{{url('/images/images/04.jpg') }}" />
                    <div class="package_con">
                    	<h4>Kanha</h4>
                        <div class="clear">
                        	<div class="fl">Starting Price
                            <h5>â‚¹ 7,000</h5></div>
                            <a href="#" class="btn_small bg_yellow fr fc_white">View Details</a>
                        </div>
                    </div>
                </div>
  				<div class="item">
                	<img src="{{url('/images/images/05.jpg') }}" />
                    <div class="package_con">
                    	<h4>Kanha</h4>
                        <div class="clear">
                        	<div class="fl">Starting Price
                            <h5>â‚¹ 7,000</h5></div>
                            <a href="#" class="btn_small bg_yellow fr fc_white">View Details</a>
                        </div>
                    </div>
                </div>
  				<div class="item">
                	<img src="{{url('/images/images/04.jpg') }}" />
                    <div class="package_con">
                    	<h4>Kanha</h4>
                        <div class="clear">
                        	<div class="fl">Starting Price
                            <h5>â‚¹ 7,000</h5></div>
                            <a href="#" class="btn_small bg_yellow fr fc_white">View Details</a>
                        </div>
                    </div>
                </div>                                
            </div>    
        </div>	 
 	</div>
    </div>   
</div>      
</div>
<!--Content-->
<script>
//Slide Carosol	
jQuery(document).ready(function ($) {

	var $sync1 = $(".big-images"),
		$sync2 = $(".thumbs"),
		flag = false,
		duration = 300;

	$sync1
		.owlCarousel({
			items: 1,
			margin: 0,
			nav: true,
			navText: [ '<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>' ],
			dots: false,
			center: false,
			loop: false
		})
		.on('changed.owl.carousel', function (e) {
			if (!flag) {
				flag = true;
				$sync2.trigger('to.owl.carousel', [e.item.index, duration, true]);
				flag = false;
			}
		});

	$sync2
		.owlCarousel({
			margin: 0,
			items: 10,
			nav: false,
			center: false,
			dots: false,
			navText : ["&lsaquo;", "&rsaquo;"]

		})
		.on('click', '.owl-item', function () {
			$sync1.trigger('to.owl.carousel', [$(this).index(), duration, true]);

		})
		.on('changed.owl.carousel', function (e) {
			if (!flag) {
				flag = true;		
				$sync1.trigger('to.owl.carousel', [e.item.index, duration, true]);
				flag = false;
			}
		});
		
		
	
	
		
		
});

</script>
@stop