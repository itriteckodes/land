@extends('layouts.front')
@section('content')

<div class="page-title page-main-section parallaxie" style="background-image: url(images/titlebg-1.jpg);">
    <div class="container padding-bottom-top-120 text-uppercase text-center">
      <div class="main-title">
        <h1>Contact us</h1>
        <h5>10 Years Of Experience!</h5>
        <div class="line_4"></div>
        <div class="line_5"></div>
        <div class="line_6"></div>
        <a href="index.html">home</a><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span><a href="contact-us.html">Contact us</a> 
      </div>
    </div>
  </div>
<section id="contact-us-2" class="padding parallaxie">

    <div class="container">

        <div class="row">

            <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">

                <div class="contact-bg">

                    <div class="bottom40">
                      <h2 class="text-uppercase">Send us<span class="color_red"> a message </span></h2>
                      <div class="line_1"></div>
                      <div class="line_2"></div>
                      <div class="line_3"></div>
                    </div>

                    <form class="contact-form" method="POST" action="{{route('contact_store')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group single-query">
                                    <input type="text" name="name" class="keyword-input" placeholder="Your Name">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group single-query">
                                    <input type="email" name="email" class="keyword-input" placeholder="Your E-mail">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group single-query">
                                    <textarea name="message" placeholder="Message" id="message"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            

                            <div class="col-md-12 top20">
                                <div class="form-group single-query"">
                                    <button type="submit" class="btn_fill" id="btn_submit" name="btn_submit">Submit</button>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>

                <div class="row">

                    <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                        <div class="address-box">
                            <p><i class="fa fa-phone" aria-hidden="true"></i>
                            </p>
                            <h4>Mobile/Phone</h4>
                            <p>+(10) 123 456 7896</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                        <div class="address-box">
                            <p><i class="fa fa-envelope" aria-hidden="true"></i>
                            </p>
                            <h4>E-Mail</h4>
                            <p><a href="#">support@find_do.com</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                        <div class="address-box">
                            <p><i class="fa fa-globe" aria-hidden="true"></i>
                            </p>
                            <h4>Website</h4>
                            <p><a href="#">www.finddodirectory.com</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                        <div class="address-box">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                            </p>
                            <h4>Address</h4>
                            <p>Spy hosting, 06 Highley St,
                                <br>Victoria, Australia.</p>
                        </div>
                    </div>
                </div>

                <div class="row padding_top">
                  <div class="col-md-12">

                    <div class="bottom40">
                      <h2 class="text-uppercase">Our <span class="color_red"> Location </span></h2>
                      <div class="line_1"></div>
                      <div class="line_2"></div>
                      <div class="line_3"></div>
                    </div>

                    <div class="contact">
                      <div class="row">
                          <div class="col-md-12">
                            <iframe style="width: 100%" height="500px" src="http://maps.google.com/maps?q=32.0827,72.6890&z=15&output=embed"></iframe>

                          </div>
                      </div>
                    </div>
                  </div>
                </div>

            </div>

        </div>

    </div>

</section>
@endsection