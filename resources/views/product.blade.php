
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Free Adidas Website Template | Single :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('frontend/css/form.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
<!-- start menu -->     
<link href="{{asset('frontend/css/megamenu.css')}}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{asset('frontend/js/megamenu.js')}}"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- end menu -->
<script type="text/javascript" src="{{asset('frontend/js/jquery.jscrollpane.min.js')}}"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
<!----details-product-slider--->
				<!-- Include the Etalage files -->
					<link rel="stylesheet" href="{{asset('frontend/css/etalage.css')}}">
					<script src="{{asset('frontend/js/jquery.etalage.min.js')}}"></script>
				<!-- Include the Etalage files -->
				<script>
						jQuery(document).ready(function($){
			
							$('#etalage').etalage({
								thumb_image_width: 300,
								thumb_image_height: 400,
								
								show_hint: true,
								click_callback: function(image_anchor, instance_id){
									alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
								}
							});
							// This is for the dropdown list example:
							$('.dropdownlist').change(function(){
								etalage_show( $(this).find('option:selected').attr('class') );
							});

					});
				</script>
				<!----//details-product-slider--->	
<!-- top scrolling -->
<script type="text/javascript" src="{{asset('frontend/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/easing.js')}}"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>					
</head>
<body>
  <div class="header-top">
     <div class="wrap"> 
        <div class="logo">
            <a href="{!! url('/') !!}"><img src="{{asset('frontend/images/logo.png')}}" alt=""/></a>
        </div>
        <div class="cssmenu">
           <ul>
             <li class="active"><a href="{{ url('/customer/login') }}">Sign in</a></li> 
             <li><a href="{{ url('/customer/register') }}">Sign up</a></li>  
             <li><a href="{{ route('shopcart.index') }}">CheckOut</a></li> 
             <li><a href="{{ route('customer.home') }}">My Account</a></li> 
           </ul>
        </div>
        
        <div class="clear"></div>
    </div>
   </div>
   <div class="header-bottom">
    <div class="wrap">
   		<!-- start header menu -->
		<ul class="megamenu skyblue">
		    <li><a class="color12" href="{!! url('/') !!}">Home</a></li>
            <li class="grid"><a class="color12" href="{{ route('allproducts') }}">All Products</a></li>
            <li class="active grid"><a class="color12" href="{{ route('shirt') }}">T-shrit</a></li>
            <li class="active grid"><a class="color12" href="{{ route('jackets') }}">Jackets</a></li>
            <li class="active grid"><a class="color12" href="{{ route('bags') }}">Bags</a></li>
            <li class="active grid"><a class="color12" href="#">About Me</a></li>
		   </ul>
		   <div class="clear"></div>
     	</div>
       </div>
       <div class="single">
         <div class="wrap">
     	    <div class="rsidebar span_1_of_left">		    
		         <section  class="sky-form">
					<h4>CATEGORY PRODUCT</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
							@foreach($amrs as $svn)
								<label class="checkbox hide"><a href=""><i></i>{{ $svn->name }}</a></label>
							@endforeach
							</div>
						</div>
		        </section>
		</div>
		<div class="cont span_2_of_3">
			  <div class="labout span_1_of_a1">
				<!-- start product_slider -->
				     <ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="{{asset('image/'.$data->image)}}" />
									<img class="etalage_source_image" src="{{asset('image/'.$data->image)}}" />
								</a>
							</li>
						</ul>
					
					
			<!-- end product_slider -->
			</div>
			<div class="cont1 span_2_of_a1">
				<h3 class="m_3">{{ $data->title }}</h3>
				
				<div class="price_single">
							  <span class="actual">Rp {{ $data->price }}</span>
							</div>
				<div class="btn">
					<strong><a href="{{ route('shopcart.edit', $data->id) }}">Buy Now</a></strong>
				</div>
    			<p class="m_desc">{!! $data->desc !!}.</p>
    			
                <div class="social_single">	
				   <ul>	
					  <li class="fb"><a href="#"><span> </span></a></li>
					  <li class="tw"><a href="#"><span> </span></a></li>
					  <li class="g_plus"><a href="#"><span> </span></a></li>
					  <li class="rss"><a href="#"><span> </span></a></li>		
				   </ul>
			    </div>
			</div>
			<div class="clear"></div>
     
     
         <ul id="flexiselDemo3">
         
			@foreach($keys as $value)
			<li><img width="150" height="103" src="{{asset('image/'.$value->image)}}" /><div class="grid-flex"><a href="{{ route('detailproduct', $value->slug_title) }}">{{ $value->categorys->name }}</a><p>Rp {!! $value->price !!}</p></div></li>
			@endforeach

		
		 </ul>
	    <script type="text/javascript">
		 $(window).load(function() {
			$("#flexiselDemo1").flexisel();
			$("#flexiselDemo2").flexisel({
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="{{asset('frontend/js/jquery.flexisel.js')}}"></script>
	 <div class="toogle">
     	
     </div>					
	 <div class="toogle">
     	
     </div>
     </div>
     <div class="clear"></div>
	 </div>
     </div>
	  <div class="footer">
       	 <div class="footer-top">
       	 
       	 <div class="copy">
       	   <div class="wrap">
       	   	  <p>© All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></p>
       	   	  <p>Web developed by raymond c.p</p>
       	   </div>
       	 </div>
       </div>
       <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
        <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>
</html>