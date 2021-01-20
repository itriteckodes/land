@extends('layouts.front')
@section('content')

<section id="banner-nin" class="parallaxie">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="banner_detail">
          <h2>Well Come in <span>Eagle City</span></h2>
          <div id="typewriter"></div>
          <div class="btns-box">
            <a href="{{route('about')}}" class="btn_brd">Read More</a>
            <a href="{{route('contact')}}" class="btn_fill">Contact us</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /#Banner -->


<!-- ABOUT US -->
<section id="about_us" class="about-us padding">
  <div class="container">
    <div class="row">
      <div class="history-section">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <h2 class="text-uppercase">Company <span class="color_red">overview</span></h2>
          <div class="line_1"></div>
          <div class="line_2"></div>
          <div class="line_3"></div>
          <p class="top20 bottom40">Nor again is there anyone who loves or pursues or desires to obtain pain of itself,
            because it is pain, but because occasionally.Nor again is there anyone who loves or pursues or desires to
            obtain pain of itself, because it is pain, but because occasionally.Nor again is there anyone who loves or
            pursues or desires to obtain pain of itself, because it is pain, but because occasionally.or desires to
            obtain Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is
            pain desires to obtain pain of itself.</p>
          <a class="link_arrow dark_border top40" href="{{route('about')}}">Read More</a>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div id="about_single" class="owl-carousel">
            <div class="item">
              <div class="content-right-md">
                <figure class="effect-layla">
                  <img src="{{asset('front/images/about-2.jpg')}}" alt="img" />
                  <figcaption> </figcaption>
                </figure>
              </div>
            </div>
            <div class="item">
              <div class="content-right-md">
                <figure class="effect-layla">
                  <img src="{{asset('front/images/about-1.jpg')}}" alt="img" />
                  <figcaption> </figcaption>
                </figure>
              </div>
            </div>
            <div class="item">
              <div class="content-right-md">
                <figure class="effect-layla">
                  <img src="{{asset('front/images/about-2.jpg')}}" alt="img" />
                  <figcaption> </figcaption>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- #/ABOUT US -->


<!-- WHO WE ARE -->
<section id="about-sev" class="padding">
  <div class="container">
    
    <div class="row">

      <div class="col-md-7 col-sm-7 col-xs-12">

        <div class="row">
          <div class="col-md-12 bottom40">
            <h2 class="text-uppercase">About Eagle City</h2>
            <div class="line_1"></div>
            <div class="line_2"></div>
            <div class="line_3"></div>
          </div>
        </div>

        <div class="about-sev-tag">

          <h4>A little about us and a breif history of how we started.</h4>

          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stan when an unknown printer took a galley of type and scramble. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

          <ul>
              <li><i class="fa fa-check-square" aria-hidden="true"></i> Pleasure and praising in finding property</li>
              <li><i class="fa fa-check-square" aria-hidden="true"></i> The great explorer of the truth</li>
              <li><i class="fa fa-check-square" aria-hidden="true"></i> Anyone who loves or pursues or desires</li>
              <li><i class="fa fa-check-square" aria-hidden="true"></i> The printing and typesetting industry.</li>
          </ul>

          <div class="founder-text">
              <p>Who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur.</p>
              <h3>- Ali Farhan, Founder.</h3>
          </div> 

        </div>

      </div>

      <div class="col-md-5 col-sm-5 col-xs-12">
        <div class="about-sev-img">
         <img src="{{asset('front/images/about.png')}}" alt="image">
        </div>
      </div>

    </div>

  </div>
</section>
<!-- #/WHO WE ARE -->




<!-- Counter Section -->
<div id="counter-section" class="p_b_230">
  <div class="container">

    <div class="row mb-20">
      <div class="col-sm-1 col-md-2"></div>
      <div class="col-xs-12 col-sm-10 col-md-8 text-center">
        <h2 class="text-uppercase">Why choose <span class="color_red">Eagle City</span></h2>
        <div class="line_1-1"></div>
        <div class="line_2-2"></div>
        <div class="line_3-3"></div>
        <p class="heading_space">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
          laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div class="col-sm-1 col-md-2"></div>
    </div>

    <div class="row number-counters text-center mt-30">

      <div class="col-md-3 col-sm-6 col-xs-12">
        <!-- first count item -->
        <div class="counters-item">
          <i class="fa fa-file" aria-hidden="true"></i>
          <!-- Set Your Number here. i,e. data-to="56" -->
          <strong data-to="520">0</strong>
          <p>Properties Sold</p>
          <div class="border-inner"></div>
        </div>

      </div>

      <div class="col-md-3 col-sm-6 col-xs-12">
        <!-- first count item -->
        <div class="counters-item">
          <i class="fa fa-th" aria-hidden="true"></i>
          <!-- Set Your Number here. i,e. data-to="56" -->
          <strong data-to="5620">0</strong>
          <p>Work Done</p>
          <div class="border-inner"></div>
        </div>

      </div>

      <div class="col-md-3 col-sm-6 col-xs-12">
        <!-- first count item -->
        <div class="counters-item">
          <i class="fa fa-users" aria-hidden="true"></i>
          <!-- Set Your Number here. i,e. data-to="56" -->
          <strong data-to="1520">0</strong>
          <p>Our Client</p>
          <div class="border-inner"></div>
        </div>

      </div>

      <div class="col-md-3 col-sm-6 col-xs-12">
        <!-- first count item -->
        <div class="counters-item">
          <i class="fa fa-th-list" aria-hidden="true"></i>
          <!-- Set Your Number here. i,e. data-to="56" -->
          <strong data-to="5020">0</strong>
          <p>Users</p>
          <div class="border-inner"></div>
        </div>

      </div>

    </div>

  </div>
</div>


<section class="page-section-ptb">
  <div class="container">
    <div class="custom-content">

      <div class="row">
        <div class="col-xs-12 bottom40">
          <h2>Eagle City</h2>
          <div class="line_1"></div>
          <div class="line_2"></div>
          <div class="line_3"></div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.</p>
        </div>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-4">
          <div class="popup-video">
            <img class="img-responsive full-width" src="images/counter.jpg" alt="">
            <div class="pro-video">
              <a title="title here" data-height="420" data-width="900" class="html5lightbox content-vbtn-color-blue"
                href="https://www.youtube.com/watch?v=8VnjK4P7gIg"><i class="fa fa-play" aria-hidden="true"></i></a>
            </div>

          </div>
        </div>

        <div class="col-lg-8 col-md-8">
          <h5>We help to improve your online business</h5>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="feature-text left-icon">
                <div class="feature-icon">
                  <i class="icon-library"></i>
                </div>
                <div class="feature-info">
                  <h5>Residential Services</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="feature-text left-icon">
                <div class="feature-icon">
                  <i class="icon-office"></i>
                </div>
                <div class="feature-info">
                  <h5>Commercial Sections</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- /#Counter Section -->

<!-- Main Features -->
<section id="our-agent" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center bottom40">
        <h2 class="text-uppercase bottom10">agents you can <span class="color_red">trust</span></h2>
        <div class="text-center seprator">
        <div class="line_4"></div>
        <div class="line_5"></div>
        <div class="line_6"></div>
        </div>
        <p>We have Properties in these Areas View a list of Featured Properties.</p>
      </div>
    </div>
    <div id="our-agent-slider" class="owl-carousel">
    @foreach (App\Models\Agent::take(6)->get() as $agent)
    <div class="item">
      <div class="single-effect">
        <figure class="ageent_overlay">
          <a href="{{route('agent_property',$agent->id)}}"><img src="{{$agent->image}}" alt="img"></a>
          <figcaption class="view-caption">
            <a href="{{route('agent_property',$agent->id)}}"><i class="icon-focus"></i></a>
          </figcaption>
        </figure>
      </div>
      <div class="team_text text-center">
        <h3>{{$agent->name}}</h3>
        <span>Sales executive</span>
        <br>
        <a href="{{route('agent_property',$agent->id)}}" class="link_arrow">View Properties</a>
      </div>
    </div>
    @endforeach
    
   
    </div>
  </div>
</section>
<!-- /#Main Features -->

<!--services-->
<section id="services-nin" class="padding">
  <div class="container">

    <div class="row">

      <div class="col-md-4 bottom40">
        <h2 class="uppercase">Our <span class="color_red">Services</span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
      </div>

      <div class="col-md-8 col-sm-12 col-xs-12">


      </div>

    </div>

    <div class="tab-content">

      <div id="home" class="tab-pane fade in active">

        <div class="row">

          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="recent-work-wrap">
              <div class="team-member text-center">
                <div class="member-thumb"> <img src="{{asset('front/images/service-1.jpg')}}" alt="image">
                  <div class="overlay2">
                    <div class="overlay_inner">
                      <a class="btn-icon" data-fancybox="gallery" href="{{asset('front/images/service-1.jpg')}}"><i
                          class="fa fa-search-plus" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="services-tab-detail">

              <div class="services-tab-heading">
                <h3>VALUATION ADVISORY</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
              </div>

              <ul class="services-list">
                <li>Appraisal Review</li>
                <li>Highest and Best Use Analysis</li>
                <li>Trend Analysis</li>
                <li>Institutional Capabilities</li>
                <li>Appraisals</li>
                <li>Estate Planning</li>
                <li>Feasibility Studies</li>
              </ul>

              <a href="{{route('about')}}" class="btn_fill">Read More</a>

            </div>
          </div>

        </div>
      </div>

      <div id="menu1" class="tab-pane fade">

        <div class="row">

          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="recent-work-wrap">
              <div class="team-member text-center">
                <div class="member-thumb"> <img src="images/service-2.jpg" alt="image">
                  <div class="overlay2">
                    <div class="overlay_inner">
                      <a class="btn-icon" data-fancybox="gallery" href="images/service-2.jpg"><i
                          class="fa fa-search-plus" aria-hidden="true"></i></a>
                      <a class="btn-icon" href="#"><i class="fa fa-share-square-o" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="services-tab-detail">

              <div class="services-tab-heading">
                <h3>VALUATION ADVISORY</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
              </div>

              <ul class="services-list">
                <li>Appraisal Review</li>
                <li>Highest and Best Use Analysis</li>
                <li>Trend Analysis</li>
                <li>Institutional Capabilities</li>
                <li>Appraisals</li>
                <li>Estate Planning</li>
                <li>Feasibility Studies</li>
              </ul>

              <a href="#" class="btn_fill">Read More</a>

            </div>
          </div>

        </div>

      </div>

      <div id="menu2" class="tab-pane fade">

        <div class="row">

          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="recent-work-wrap">
              <div class="team-member text-center">
                <div class="member-thumb"> <img src="images/service-3.jpg" alt="image">
                  <div class="overlay2">
                    <div class="overlay_inner">
                      <a class="btn-icon" data-fancybox="gallery" href="images/service-3.jpg"><i
                          class="fa fa-search-plus" aria-hidden="true"></i></a>
                      <a class="btn-icon" href="#"><i class="fa fa-share-square-o" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="services-tab-detail">

              <div class="services-tab-heading">
                <h3>VALUATION ADVISORY</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
              </div>

              <ul class="services-list">
                <li>Appraisal Review</li>
                <li>Highest and Best Use Analysis</li>
                <li>Trend Analysis</li>
                <li>Institutional Capabilities</li>
                <li>Appraisals</li>
                <li>Estate Planning</li>
                <li>Feasibility Studies</li>
              </ul>

              <a href="#" class="btn_fill">Read More</a>

            </div>
          </div>

        </div>

      </div>

      <div id="menu3" class="tab-pane fade">

        <div class="row">

          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="recent-work-wrap">
              <div class="team-member text-center">
                <div class="member-thumb"> <img src="images/service-4.jpg" alt="image">
                  <div class="overlay2">
                    <div class="overlay_inner">
                      <a class="btn-icon" data-fancybox="gallery" href="images/service-4.jpg"><i
                          class="fa fa-search-plus" aria-hidden="true"></i></a>
                      <a class="btn-icon" href="#"><i class="fa fa-share-square-o" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="services-tab-detail">

              <div class="services-tab-heading">
                <h3>VALUATION ADVISORY</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
              </div>

              <ul class="services-list">
                <li>Appraisal Review</li>
                <li>Highest and Best Use Analysis</li>
                <li>Trend Analysis</li>
                <li>Institutional Capabilities</li>
                <li>Appraisals</li>
                <li>Estate Planning</li>
                <li>Feasibility Studies</li>
              </ul>

              <a href="#" class="btn_fill">Read More</a>

            </div>
          </div>

        </div>

      </div>

      <div id="menu4" class="tab-pane fade">

        <div class="row">

          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="recent-work-wrap">
              <div class="team-member text-center">
                <div class="member-thumb"> <img src="images/service-5.jpg" alt="image">
                  <div class="overlay2">
                    <div class="overlay_inner">
                      <a class="btn-icon" data-fancybox="gallery" href="images/service-5.jpg"><i
                          class="fa fa-search-plus" aria-hidden="true"></i></a>
                      <a class="btn-icon" href="#"><i class="fa fa-share-square-o" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="services-tab-detail">

              <div class="services-tab-heading">
                <h3>VALUATION ADVISORY</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
              </div>

              <ul class="services-list">
                <li>Appraisal Review</li>
                <li>Highest and Best Use Analysis</li>
                <li>Trend Analysis</li>
                <li>Institutional Capabilities</li>
                <li>Appraisals</li>
                <li>Estate Planning</li>
                <li>Feasibility Studies</li>
              </ul>

              <a href="#" class="btn_fill">Read More</a>

            </div>
          </div>

        </div>

      </div>

      <div id="menu5" class="tab-pane fade">

        <div class="row">

          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="recent-work-wrap">
              <div class="team-member text-center">
                <div class="member-thumb"> <img src="images/service-6.jpg" alt="image">
                  <div class="overlay2">
                    <div class="overlay_inner">
                      <a class="btn-icon" data-fancybox="gallery" href="images/service-6.jpg"><i
                          class="fa fa-search-plus" aria-hidden="true"></i></a>
                      <a class="btn-icon" href="#"><i class="fa fa-share-square-o" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="services-tab-detail">

              <div class="services-tab-heading">
                <h3>VALUATION ADVISORY</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
              </div>

              <ul class="services-list">
                <li>Appraisal Review</li>
                <li>Highest and Best Use Analysis</li>
                <li>Trend Analysis</li>
                <li>Institutional Capabilities</li>
                <li>Appraisals</li>
                <li>Estate Planning</li>
                <li>Feasibility Studies</li>
              </ul>

              <a href="#" class="btn_fill">Read More</a>

            </div>
          </div>

        </div>

      </div>

      <div id="menu6" class="tab-pane fade">

        <div class="row">

          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="recent-work-wrap">
              <div class="team-member text-center">
                <div class="member-thumb"> <img src="{{asset('front/images/service-7.jpg')}}" alt="image">
                  <div class="overlay2">
                    <div class="overlay_inner">
                      <a class="btn-icon" data-fancybox="gallery" href="{{asset('images/service-7.jpg')}}"><i
                          class="fa fa-search-plus" aria-hidden="true"></i></a>
                      <a class="btn-icon" href="#"><i class="fa fa-share-square-o" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="services-tab-detail">

              <div class="services-tab-heading">
                <h3>VALUATION ADVISORY</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
              </div>

              <ul class="services-list">
                <li>Appraisal Review</li>
                <li>Highest and Best Use Analysis</li>
                <li>Trend Analysis</li>
                <li>Institutional Capabilities</li>
                <li>Appraisals</li>
                <li>Estate Planning</li>
                <li>Feasibility Studies</li>
              </ul>

              <a href="#" class="btn_fill">Read More</a>

            </div>
          </div>

        </div>

      </div>

      <div id="menu7" class="tab-pane fade">

        <div class="row">

          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="recent-work-wrap">
              <div class="team-member text-center">
                <div class="member-thumb"> <img src="{{asset('front/images/service-8.jpg')}}" alt="image">
                  <div class="overlay2">
                    <div class="overlay_inner">
                      <a class="btn-icon" data-fancybox="gallery" href="{{asset('images/service-8.jpg')}}"><i
                          class="fa fa-search-plus" aria-hidden="true"></i></a>
                      <a class="btn-icon" href="#"><i class="fa fa-share-square-o" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="services-tab-detail">

              <div class="services-tab-heading">
                <h3>VALUATION ADVISORY</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
              </div>

              <ul class="services-list">
                <li>Appraisal Review</li>
                <li>Highest and Best Use Analysis</li>
                <li>Trend Analysis</li>
                <li>Institutional Capabilities</li>
                <li>Appraisals</li>
                <li>Estate Planning</li>
                <li>Feasibility Studies</li>
              </ul>

              <a href="#" class="btn_fill">Read More</a>

            </div>
          </div>

        </div>

      </div>

    </div>

  </div>
</section>
<!--/#services-->


<!-- PROPERTY LISTING -->
{{-- <section id="property" class="bg_light padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 bottom40">
        <h2 class="uppercase">PROPERTY <span class="color_red">LISTINGS</span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
        <p>We have Properties in these Areas View a list of Featured Properties.</p>
      </div>
    </div>
    <div class="row">
      @foreach (App\Models\Property::take(6)->get() as $property)
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="property_item heading_space">
          <div class="image">
            <img src="{{$property->image1}}" alt="listin" class="img-responsive">
            <div class="overlay">
              <div class="centered"><a class="link_arrow white_border"
                  href="{{route('property_detail',$property->id)}}">View Detail</a></div>
            </div>
            <div class="price"><span class="tag">
              @if ($property->type == 'sale')
                  For Sale
              @elseif($property->type == 'invest')
                  For Investment
              @else
                  For Rent
              @endif
            </span></div>
            <div class="property_meta">
              <span><i class="fa fa-object-group"></i>{{$property->area}} sq ft </span>
              <span><i class="fa fa-bed"></i>{{$property->bedrooms}}</span>
              <span><i class="fa fa-bath"></i>{{$property->bathrooms}} Bathroom</span>
            </div>
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3><a href="property_details_1.html">{{$property->address}}</a></h3>
              <span class="bottom10">{{$property->city}}</span>
              <p><strong>PKR: {{$property->price}} </strong></p>
            </div>
            <div class="favroute clearfix">
              <p class="pull-left"><i class="icon-calendar2"></i> {{$property->created_at->diffForHumans()}}</p>

            </div>
          </div>
        </div>
      </div>
    
      @endforeach
    </div>
    <div class="text-center">
      <a href="{{route('properties')}}" class="btn_fill ">View All</a>

    </div>

  </div>
</section> --}}

<section id="property" class="bg_light padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 bottom40">
        <h2 class="uppercase">PROPERTY <span class="color_red">LISTINGS</span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
        <p>We have Properties in these Areas View a list of Featured Properties.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <div class="property_item bottom40">
          <div class="image">
            <img src="{{asset('front/images/property-listing-5.jpg')}}" alt="listin" class="img-responsive">
            <div class="property_meta">
            <span><i class="fa fa-object-group"></i>530 sq ft </span>
            <span><i class="fa fa-bed"></i>2</span>
            <span><i class="fa fa-bath"></i>1 Bathroom</span></div>
            <div class="price"><span class="tag">For Rent</span></div>
            <div class="overlay">
            <div class="centered"><a class="link_arrow white_border" href="property_details_1.html">View Detail</a></div>
            </div>
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3><a href="property_details_1.html">South Mervin Boulevard</a></h3>
              <span>45 Regent Street, London, UK</span>
              <p class="p-font-15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta nobis…</p>
            </div>
            <div class="favroute clearfix">
              <p class="pull-md-left">$8,600 </p>
          
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="property_item bottom40">
          <div class="image">
            <img src="{{asset('front/images/property-listing-2.jpg')}}" alt="listin" class="img-responsive">
            <div class="property_meta">
            <span><i class="fa fa-object-group"></i>530 sq ft </span>
            <span><i class="fa fa-bed"></i>2</span>
            <span><i class="fa fa-bath"></i>1 Bathroom</span></div>
            <div class="price"><span class="tag">For Rent</span></div>
            <div class="overlay">
            <div class="centered"><a class="link_arrow white_border" href="property_details_1.html">View Detail</a></div>
            </div>
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3><a href="property_details_1.html">The Helux villa</a></h3>
              <span>45 Regent Street, London, UK</span>
              <p class="p-font-15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta nobis…</p>
            </div>
            <div class="favroute clearfix">
              <p class="pull-md-left">$5,600,000</p>
        
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="property_item bottom40">
          <div class="image">
            <img src="{{asset('front/images/property-listing-3.jpg')}}" alt="listin" class="img-responsive">
            <div class="property_meta">
            <span><i class="fa fa-object-group"></i>530 sq ft </span>
            <span><i class="fa fa-bed"></i>2</span>
            <span><i class="fa fa-bath"></i>1 Bathroom</span></div>
            <div class="price"><span class="tag">For Sale</span></div>
            <div class="overlay">
            <div class="centered"><a class="link_arrow white_border" href="property_details_1.html">View Detail</a></div>
            </div>
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3><a href="property_details_1.html">House in New York City</a></h3>
              <span>Merrick Way, Miami, USA</span>
              <p class="p-font-15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta nobis…</p>
            </div>
            <div class="favroute clearfix">
              <p class="pull-md-left">$8,600 </p>
       
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="property_item bottom40">
          <div class="image">
            <img src="{{asset('front/images/property-listing-4.jpg')}}" alt="listin" class="img-responsive">
            <div class="property_meta">
            <span><i class="fa fa-object-group"></i>530 sq ft </span>
            <span><i class="fa fa-bed"></i>2</span>
            <span><i class="fa fa-bath"></i>1 Bathroom</span></div>
            <div class="price"><span class="tag">For Sale</span></div>
            <div class="overlay">
            <div class="centered"><a class="link_arrow white_border" href="property_details_1.html">View Detail</a></div>
            </div>
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3><a href="property_details_1.html">House in New York City</a></h3>
              <span>Merrick Way, Miami, USA</span>
              <p class="p-font-15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta nobis…</p>
            </div>
            <div class="favroute clearfix">
              <p class="pull-md-left">$32,650,000</p>
           
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="property_item bottom40">
          <div class="image">
            <img src="{{asset('front/images/property-listing-5.jpg')}}" alt="listin" class="img-responsive">
            <div class="property_meta">
            <span><i class="fa fa-object-group"></i>530 sq ft </span>
            <span><i class="fa fa-bed"></i>2</span>
            <span><i class="fa fa-bath"></i>1 Bathroom</span></div>
            <div class="price"><span class="tag">For Rent</span></div>
            <div class="overlay">
            <div class="centered"><a class="link_arrow white_border" href="property_details_1.html">View Detail</a></div>
            </div>
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3><a href="property_details_1.html">Triple Story</a></h3>
              <span>Merrick Way, Miami, USA</span>
              <p class="p-font-15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta nobis…</p>
            </div>
            <div class="favroute clearfix">
              <p class="pull-md-left">$8, 600 </p>
           
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="property_item bottom40">
          <div class="image">
            <img src="{{asset('front/images/property-listing-6.jpg')}}" alt="listin" class="img-responsive">
            <div class="property_meta">
            <span><i class="fa fa-object-group"></i>530 sq ft </span>
            <span><i class="fa fa-bed"></i>2</span>
            <span><i class="fa fa-bath"></i>1 Bathroom</span></div>
            <div class="price"><span class="tag">For Rent</span></div>
            <div class="overlay">
            <div class="centered"><a class="link_arrow white_border" href="property_details_1.html">View Detail</a></div>
            </div>
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3><a href="property_details_1.html">House in New York City</a></h3>
              <span>new satellite town sargodha</span>
              <p class="p-font-15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta nobis…</p>
            </div>
            <div class="favroute clearfix">
              <p class="pull-md-left">$1,350,000</p>
        
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <ul class="pager">
          <li><a href="#.">1</a></li>
          <li class="active"><a href="#.">2</a></li>
          <li><a href="#.">3</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- PROPERTY LISTING -->


<!-- IMAGE WITH CONTENT -->
<section class="image-text-eig parallaxie">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-10 col-md-offset-1 text-center">
        <div class="image-text-eig-details">
          <h2>Eagle City</h2>
          <h5>Find your dreams with eagle city real estate?</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pulvinar est eget odio porttitor
            molestie. Vestibulum id dui quis erat vehicula pulvinar. Duis eu felis justo, vitae viverra dui.
            Pellentesque venenatis mi vel sapien adipiscing venenatis.onsectetur adipiscing elit. vitae viverra dui.
            Pellentesque venenatis mi vel sapien adipiscing venenatis.</p>
          <a href="#" class="btn_fill">Contact Now</a>
        </div>
      </div>
    </div>
  </div>

</section>
<!-- IMAGE WITH CONTENT -->



<!-- CONTACT -->
<section id="contact" class="bg-color-red">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12 text-center">
        <div class="get-tuch">
          <i class="icon-telephone114"></i>
          <ul>
            <li>
              <h4>Phone Number</h4>
            </li>
            <li>
              <p>+1 900 234 567 - 68</p>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 text-center">
        <div class="get-tuch">
          <i class="icon-icons74"></i>
          <ul>
            <li>
              <h4>Victoria Hall,</h4>
            </li>
            <li>
              <p>Eagle City, Sargodha</p>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 text-center">
        <div class="get-tuch">
          <i class=" icon-icons142"></i>
          <ul>
            <li>
              <h4>Email Address</h4>
            </li>
            <li><a href="#.">info@eaglecity.com</a> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection