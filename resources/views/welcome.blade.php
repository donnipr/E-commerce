
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Dirty Ash.</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
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
            <li><a class="color12" href="{!! url('') !!}">Home</a></li>
            <li class="grid"><a class="color12" href="{{ route('allproducts') }}">All Products</a></li>
            <li class="active grid"><a class="color12" href="{{ route('shirt') }}">T-shrit</a></li>
            <li class="active grid"><a class="color12" href="{{ route('jackets') }}">Jackets</a></li>
            <li class="active grid"><a class="color12" href="{{ route('bags') }}">Bags</a></li>
            <li class="active grid"><a class="color12" href="https://api.whatsapp.com/send?phone=6285803436926&saya ingin bertanya..">Chat Me</a></li>              
           </ul>
           <div class="clear"></div>
        </div>
       </div>
       <div class="index-banner">
          <div class="wmuSlider example1" style="height: 560px;">
              <div class="wmuSliderWrapper">
                  <article style="position: relative; width: 100%; opacity: 1;"> 
                    <div class="banner-wrap">
                        <div class="slider-left">
                            <img src="{{asset('frontend/images/bn1.jpg')}}" alt=""/> 
                        </div>
                         <div class="slider-right">
                            <h1>Classic</h1>
                            <h2>White</h2>
                            <p>Lorem ipsum dolor sit amet</p>
                            <div class="btn"><a href="">Shop Now</a></div>
                         </div>
                         <div class="clear"></div>
                     </div>
                    </article>
                   <article style="position: absolute; width: 100%; opacity: 0;"> 
                     <div class="banner-wrap">
                        <div class="slider-left">
                            <img src="{{asset('frontend/images/banner1.jpg')}}" alt=""/> 
                        </div>
                         <div class="slider-right">
                            <h1>Classic</h1>
                            <h2>White</h2>
                            <p>Lorem ipsum dolor sit amet</p>
                            <div class="btn"><a href="shop.html">Shop Now</a></div>
                         </div>
                         <div class="clear"></div>
                     </div>
                   </article>
                   <article style="position: absolute; width: 100%; opacity: 0;">
                    <div class="banner-wrap">
                        <div class="slider-left">
                            <img src="{{asset('frontend/images/bn2.jpg')}}" alt=""/> 
                        </div>
                         <div class="slider-right">
                            <h1>Classic</h1>
                            <h2>White</h2>
                            <p>Lorem ipsum dolor sit amet</p>
                            <div class="btn"><a href="shop.html">Shop Now</a></div>
                         </div>
                         <div class="clear"></div>
                     </div>
                   </article>
                   <article style="position: absolute; width: 100%; opacity: 0;">
                    <div class="banner-wrap">
                        <div class="slider-left">
                            <img src="{{asset('frontend/images/banner2.jpg')}}" alt=""/> 
                        </div>
                         <div class="slider-right">
                            <h1>Classic</h1>
                            <h2>White</h2>
                            <p>Lorem ipsum dolor sit amet</p>
                            <div class="btn"><a href="shop.html">Shop Now</a></div>
                         </div>
                         <div class="clear"></div>
                     </div>
                   </article>
                   <article style="position: absolute; width: 100%; opacity: 0;"> 
                     <div class="banner-wrap">
                        <div class="slider-left">
                            <img src="{{asset('frontend/images/banner1.jpg')}}" alt=""/> 
                        </div>
                         <div class="slider-right">
                            <h1>Classic</h1>
                            <h2>White</h2>
                            <p>Lorem ipsum dolor sit amet</p>
                            <div class="btn"><a href="shop.html">Shop Now</a></div>
                         </div>
                         <div class="clear"></div>
                     </div>
                  </article>
                </div>
                <a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a>
                <ul class="wmuSliderPagination">
                    <li><a href="#" class="">0</a></li>
                    <li><a href="#" class="">1</a></li>
                    <li><a href="#" class="wmuActive">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                  </ul>
                 <a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a><ul class="wmuSliderPagination"><li><a href="#" class="wmuActive">0</a></li><li><a href="#" class="">1</a></li><li><a href="#" class="">2</a></li><li><a href="#" class="">3</a></li><li><a href="#" class="">4</a></li></ul></div>
                 <script src="{{asset('frontend/js/jquery.wmuSlider.js')}}"></script> 
                 <script type="text/javascript" src="{{asset('frontend/js/modernizr.custom.min.js')}}"></script> 
                        <script>
                             $('.example1').wmuSlider();         
                        </script>                     
             </div>
             <div class="main">
                <div class="wrap">
                  <div class="content-top">
                    <div class="lsidebar span_1_of_c1">
                      <p>Temukan products terbaik kami dari yang terbaik</p>
                    </div>
                    <div class="cont span_2_of_c1">
                      <div class="social">  
                         <ul>   
                          <li class="facebook"><a href="#"><span> </span></a><div class="radius"> <img src="{{asset('frontend/images/radius.png')}}"><a href="#"> </a></div><div class="border hide"><p class="num">1.51K</p></div></li>
                         </ul>
                       </div>
                       <div class="social"> 
                           <ul> 
                              <li class="twitter"><a href="#"><span> </span></a><div class="radius"> <img src="{{asset('frontend/images/radius.png')}}"></div><div class="border hide"><p class="num">1.51K</p></div></li>
                          </ul>
                        </div>
                         <div class="social">   
                           <ul> 
                              <li class="google"><a href="#"><span> </span></a><div class="radius"> <img src="{{asset('frontend/images/radius.png')}}"></div><div class="border hide"><p class="num">1.51K</p></div></li>
                           </ul>
                         </div>
                         <div class="social">   
                           <ul> 
                              <li class="dot"><a href="#"><span> </span></a><div class="radius"> <img src="{{asset('frontend/images/radius.png')}}"></div><div class="border hide"><p class="num">1.51K</p></div></li>
                          </ul>
                        </div>
                        <div class="clear"> </div>
                      </div>
                      <div class="clear"></div>         
                   </div>


                <div class="content-bottom">
                   <div class="box1">
                   @foreach($data as $key)
                    <div class="col_1_of_3 span_1_of_3"><a href="{{ route('detailproduct', $key->slug_title) }}">
                     <div class="view view-fifth">
                      <div class="top_box">
                        <h3 class="m_1">{!! substr($key->title,0,25) !!}</h3><br>
                        
                         <div class="grid_img">
                           <div class="css3"><img width="260" height="183" src="{{asset('image/'.$key->image)}}" alt=""/></div>
                              <div class="mask">
                                <div class="info">Quick View</div>
                              </div>
                        </div>
                       <div class="price">Rp {{ $key->price }}</div>
                       </div>
                        </div>
                       <span class="rating">
                        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
                        <label for="rating-input-1-5" class="rating-star1"></label>
                        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
                        <label for="rating-input-1-4" class="rating-star1"></label>
                        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
                        <label for="rating-input-1-3" class="rating-star1"></label>
                        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
                        <label for="rating-input-1-2" class="rating-star"></label>
                        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
                        <label for="rating-input-1-1" class="rating-star"></label>&nbsp;
                      (45)
                      </span>
                         <ul class="list">
                          <li>
                            <img src="{{asset('frontend/images/plus.png')}}" alt=""/>
                            <ul class="icon1 sub-icon1 profile_img">
                              <li><a class="active-icon c1" href="{{ route('shopcart.edit', $key->id) }}">Add To Bag </a>
                              </li>
                             </ul>
                           </li>
                         </ul>
                        <div class="clear"></div>

                    </a></div>
                    @endforeach
                  <div class="clear"></div>
              </div>
              <div class="box1">
                  
              </div>
              
                </div>
              </div>
             </div>
        </div>
        <div class="footer">
          <div class="footer-top">
            <div class="wrap">
                  <div class="clear"></div>
             </div>
         </div></div>
         
         <div class="copy">
           <div class="wrap">
              <p>© All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></p>
              <p>Web developed by priyagung </p>
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