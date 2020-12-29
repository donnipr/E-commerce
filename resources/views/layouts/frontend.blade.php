
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Dirty ASH.</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}"></script>
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
			<a href="index.html"><img src="{{asset('frontend/images/logo.png')}}" alt=""/></a>
	    </div>
	    <div class="cssmenu">
		   <ul>
			 <li class="active"><a href="register.html">Sign up & Save</a></li> 
			 <li><a href="shop.html">Store Locator</a></li> 
			 <li><a href="login.html">My Account</a></li> 
			 <li><a href="checkout.html">CheckOut</a></li> 
		   </ul>
		</div>
		<ul class="icon2 sub-icon2 profile_img">
			<li><a class="active-icon c2" href="#"> </a>
				<ul class="sub-icon2 list">
					<li><h3>Products</h3><a href=""></a></li>
					<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
				</ul>
			</li>
		</ul>
		<div class="clear"></div>
 	</div>
   </div>
   <div class="header-bottom">
   	<div class="wrap">
   		<!-- start header menu -->
		<ul class="megamenu skyblue">
		    <li><a class="color1" href="#">Home</a></li>
			<li class="grid"><a class="color2" href="#">Men</a></li>
  			   <li class="active grid"><a class="color4" href="#">Women</a></li>				
				<li><a class="color5" href="#">Kids</a></li>
				<li><a class="color6" href="#">Sale</a></li>
				<li><a class="color7" href="#">Customize</a></li>
				<li><a class="color8" href="#">Shop</a></li>
				<li><a class="color9" href="#">Football</a></li>
				<li><a class="color10" href="#">Running</a></li>
				<li><a class="color11" href="#">Originals</a></li>
				<li><a class="color12" href="#">Basketball</a></li>
		   </ul>
		   <div class="clear"></div>
     	</div>
       </div>
       <div class="login">
         
       @yield('main')

		</div>
 
       	<div class="footer-bottom">
       	 	<div class="wrap">
       	 		<div class="section group">
				<div class="col_1_of_5 span_1_of_5">
				<br>
				</div>
				<div class="clear"></div>
			</div>
       	 	</div>
       	 </div>
       	 <div class="copy">
       	   <div class="wrap">
       	 	  <p>© All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></p>
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