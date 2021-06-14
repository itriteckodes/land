<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from logicsforest.com/themeforest/idea-homes/ideahomes_demo_files/index-9.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Dec 2020 06:04:53 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Eagle City </title>
<link rel="stylesheet" type="text/css" href="{{asset('front/css/master.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/css/color/color-1.css')}}" id="color" />
<link rel="shortcut icon" href="{{asset('front/images/short_icon.png')}}">
<link rel="stylesheet" href="{{asset('toastr/toastr.min.css')}}">

@yield('style')
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>

<!--LOADER -->
{{-- <div class="loader">
  <div class="cssload-thecube">
    <div class="cssload-cube cssload-c1"></div>
    <div class="cssload-cube cssload-c2"></div>
    <div class="cssload-cube cssload-c4"></div>
    <div class="cssload-cube cssload-c3"></div>
  </div>
</div> --}}
<!--LOADER -->


<!--===== BACK TO TOP =====-->
<div class="short-msg">
  <a href="#." class="back-to"><i class="icon-arrow-up2"></i></a>
  <a href="#." class="short-topup" data-toggle="modal" data-target="#myModal"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
</div>
<!--===== #/BACK TO TOP =====-->


<!--===== HEADER =====-->
<header id="main_header">

  <!--===== HEADER TOP =====-->
  <div id="header-top">
      <div class="container">
          <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-12">
                  <p class="p-font-15 p-white">We are Best in Town With 40 years of Experience.</p>
              </div>
              <div class="col-md-8 col-sm-8 col-xs-12 text-right">
                  <div class="header-top-links">
                      <ul>
                        <li><a href="{{route('agent.dashboard')}}"><i class="icon-icons215"></i>Agent</a></li>
                        <li class="af-line"></li>
{{--                         
                        <li><a href="{{route('user.dashboard')}}"><i class="icon-icons215"></i>Dashboard</a></li>
                        <li class="af-line"></li> --}}
                          <li><a href="{{route('user.login')}}" ><i class="icon-icons179"></i><strong>Login/Register</strong></a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--===== #/HEADER TOP =====-->

  <!--===== HEADER BOTTOM =====-->
  <div id="header-bottom">
      <div class="container">
          <div class="row">
              <div class="col-md-2 hidden-xs hidden-sm">
                  <a href="{{url('/')}}"><img src="{{asset('front/images/logo.png')}}" height="80px" width="120px" alt="logo" /></a>
              </div>
              <div class="col-md-10 col-sm-12 col-xs-12">
                  <div class="get-tuch text-left top20">
                      <i class="icon-telephone114"></i>
                      <ul>
                          <li>
                              <h4>Phone Number</h4>
                          </li>
                          <li>
                              <p>+92300852963</p>
                          </li>
                      </ul>
                  </div>
                  <div class="get-tech-line top20"><img src="{{asset('front/images/get-tuch-line.png')}}" alt="line" /></div>
                  <div class="get-tuch text-left top20">
                      <i class="icon-icons74"></i>
                      <ul>
                          <li>
                              <h4>Main Office,</h4>
                          </li>
                          <li>
                              <p>Eagle City, Sarodha,Punjab,Pakistan</p>
                          </li>
                      </ul>
                  </div>
                  <div class="get-tech-line top20"><img src="{{asset('front/images/get-tuch-line.png')}}" alt="line" /></div>
                  <div class="get-tuch text-left top20">
                      <i class=" icon-icons142"></i>
                      <ul>
                          <li>
                              <h4>Email Address</h4>
                          </li>
                          <li>
                              <p><a href="#">info@eaglecity.com</a></p>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--===== #/HEADER BOTTOM =====-->

  <!--===== NAV-BAR =====-->
  <nav class="navbar navbar-default navbar-sticky bootsnav">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="social-icons text-right">
                      <ul class="socials">
                          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                          <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                      </ul>
                  </div>
                  <!-- Start Header Navigation -->
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                          <i class="fa fa-bars"></i></button>
                      <a class="navbar-brand sticky_logo" href="index.html"><img src="{{asset('front/images/logo.png')}}" height="80px" width="100px"
                              class="logo" alt=""></a>
                  </div>
                  <!-- End Header Navigation -->
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="navbar-menu">
                      <ul class=" ml-2 nav navbar-nav" data-in="fadeInDown" data-out="fadeOutUp">
                          <li class="{{(Request::is('/'))? 'active':''}}">
                              <a href="{{url('/')}}" >Home</a>
                          </li>
                          
                          <li class="{{(Request::is('agents*'))? 'active':''}}">
                              <a href="{{route('agents')}}">Agents</a>
                          </li>

                          <li class="{{(Request::is('services*'))? 'active':''}}">
                              <a href="{{route('services')}}" >Services</a>
                          </li>

                          <li class="{{(Request::is('plots'))? 'active':''}}">
                              <a href="{{route('plots')}}">Plots</a>
                          </li>

                          <li class="{{(Request::is('properties'))? 'active':''}}">
                              <a href="{{route('properties')}}">Properties</a>
                          </li>

                          <li class="{{(Request::is('maps'))? 'active':''}}">
                              <a href="{{route('maps')}}">Maps</a>
                          </li>

                          <li class="{{(Request::is('about'))? 'active':''}}">
                              <a href="{{route('about')}}">About</a>
                          </li>

                          <li class="{{(Request::is('contact'))? 'active':''}}">
                              <a href="{{route('contact')}}">Contact Us</a>
                          </li>

                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </nav>
  <!--===== #/NAV-BAR =====-->
</header>
<!--===== #/HEADER =====-->  


<!-- Banner -->
@yield('content')
<!-- CONTACT --> 


<!-- FOOTER -->
<footer id="footer" class="footer divider layer-overlay overlay-dark-8">
  <div class="container pt-70 pb-40">
   
    <div class="row mt-30">
      <div class="col-md-3 col-sm-4">
        <div class="widget dark">
          <img class="mt-5 mb-20" alt="" src="images/logo.png">
          <p>Property centre main satellite town chowk Sargodha
          </p>
          <ul class="list-inline mt-5">
            <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-2 mr-5"></i> <a class="text-gray" href="#.">123-456-789</a> </li>
            <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-color-2 mr-5"></i> <a class="text-gray" href="#.">contact@eaglecity.com</a> </li>
            <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-color-2 mr-5"></i> <a class="text-gray" href="#.">www.eaglecity.com</a> </li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-4">
        <div class="widget dark">
          <h5 class="widget-title mb-10">Connect With Us</h5>
          <ul class="socials">
            <li><a href="#."><i class="fa fa-facebook"></i></a></li>
            <li><a href="#."><i class="fa fa-twitter"></i></a></li>
            <li><a href="#."><i class="fa fa-youtube"></i></a></li>
            <li><a href="#."><i class="fa fa-instagram"></i></a></li>
            <li><a href="#."><i class="fa fa-pinterest"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-sm-4 text-right">
        <div class="mb20">
          <form class="padding-top-30">
            <input class="search" placeholder="Enter your Email" type="search">
            <a href="#." class="button"><i class="icon-mail-envelope-open"></i></a>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom bg-black-333">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-5">
          <p class="font-11 text-black-777 m-0 copy-right">Copyright: 2021 <a href="#."><span class="color_red">Eagle City</span></a>. All Rights Reserved</p>
        </div>
        <div class="col-md-6 col-sm-7 text-right">
          <div class="widget no-border m-0">
            <ul class="list-inline sm-text-center mt-5 font-12">
              <li> <a href="#.">FAQ</a> </li>
              <li>|</li>
              <li> <a href="#.">Help Desk</a> </li>
              <li>|</li>
              <li> <a href="#.">Support</a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- FOOTER --> 


<!-- Modal -->

<!-- #/Modal -->


<!--===== REQUIRED JS =====--> 
<script src="{{asset('front/js/jquery-3.2.1.min.js')}}"></script> 
<script src="{{asset('front/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('front/js/bootsnav.js')}}"></script>

<!--To View on scroll-->
<script src="{{asset('front/js/jquery.appear.js')}}"></script>
 
<!--Owl Slider-->
<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>

<!--Parallax-->
<script src="{{asset('front/js/parallaxie.js')}}"></script>

<!--Fancybox-->
<script src="{{asset('front/js/jquery.fancybox.min.js')}}"></script> 

<!--Cube Gallery-->
<script src="{{asset('front/js/cubeportfolio.min.js')}}"></script> 

<!--Bootstrap Dropdown-->
<script src="{{asset('front/js/bootstrap-select.js')}}"></script>

<!--Video Popup-->
<script src="{{asset('front/js/videobox/video.js')}}"></script>

<!--Datepicker-->
<script src="{{asset('front/js/datepicker.js')}}"></script> 

<!--Dropzone-->
<script src="{{asset('front/js/dropzone.min.js')}}"></script>

<!--Wow animation-->
<script src="{{asset('front/js/wow.min.js')}}"></script>

<!--Rang Slider-->
<script src="{{asset('front/js/range-Slider.min.js')}}"></script> 

<!--Checkbox-->
<script src="{{asset('front/js/selectbox-0.2.min.js')}}"></script> 

<!--Checkbox-->
<script src="{{asset('front/js/scrollreveal.min.js')}}"></script> 

<!--Checkbox-->
<script src="{{asset('front/js/jquery-countTo.js')}}"></script> 

<!--Checkbox-->
<script src="{{asset('front/js/jquery.typewriter.js')}}"></script> 

<!--Checkbox-->
<script src="{{asset('front/js/death.min.js')}}"></script>

<!--Revolution Slider-->
<script src="{{asset('front/js/themepunch/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('front/js/themepunch/jquery.themepunch.revolution.min.js')}}"></script>   
<script src="{{asset('front/js/themepunch/revolution.extension.layeranimation.min.js')}}"></script> 
<script src="{{asset('front/js/themepunch/revolution.extension.navigation.min.js')}}"></script> 
<script src="{{asset('front/js/themepunch/revolution.extension.parallax.min.js')}}"></script> 
<script src="{{asset('front/js/themepunch/revolution.extension.slideanims.min.js')}}"></script> 
<script src="{{asset('front/js/themepunch/revolution.extension.video.min.js')}}"></script>

<!--Custom Js -->
<script src="{{asset('front/js/functions.js')}}"></script>

<!--Maps & Markers-->
<script src="{{asset('front/js/form.js')}}"></script> 
<script src="{{asset('front/js/custom-map.js')}}"></script> 
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U"></script>
<script src="{{asset('front/js/gmaps.js')}}"></script>
<script src="{{asset('front/js/contact.js')}}"></script> 
<script src="{{asset('toastr/toastr.min.js')}}"></script>
@yield('script')
@toastr_render
<!--===== #/REQUIRED JS =====-->

</body>

<!-- Mirrored from logicsforest.com/themeforest/idea-homes/ideahomes_demo_files/index-9.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Dec 2020 06:05:02 GMT -->
</html>

