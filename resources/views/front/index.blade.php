@extends('layouts.front')
@section('content')

<section id="banner-nin" class="parallaxie">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="banner_detail">
          <h2>Well Come to <span>Eagle City</span></h2>
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
          <p class="top20 bottom40">Eagle Developers & Builders (Pvt) Limited is specialized in 
            constructing world-class housing facilities and gated communities. 
            This new phenomenon of excellence has started from relatively low-key 
            markets, before storming the mainstream Real Estate regions.
            In record time, the rise of Royal Developers & Builders as a Real 
            Estate developer is only because of ALLAH ALMIGHTY’s blessings. Royal 
            Developers & Builders also owe their gratitude to the partners, 
            associates, investors and friends for their continued support & trust.
            Eagle Group through its subsidiary Eagle Developers & Builders reiterate to work together for setting newer higher standards of living and developments – contributing towards a better, progressive & prosperous Pakistan – INSHA'ALLAH..  </p>
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

          <p>In view of growing housing demand in the Sargodha city, Eagle 
            Developers intends to build a quality housing project on Lahore road 
            adjacent to Motorway.Motorway Interchange falling on the eastern route 
            of Lahore Road. Eagle City aims to become first ever smart city in Sargodha with smart E-Services. To lead as a model for sustainable and samrt development. </p>

          <ul>
              <li><i class="fa fa-check-square" aria-hidden="true"></i>  Ease and security in finding properties</li>
              <li><i class="fa fa-check-square" aria-hidden="true"></i>  Availing services online  </li>
              <li><i class="fa fa-check-square" aria-hidden="true"></i> Personalized smart portal for customers</li>
              <li><i class="fa fa-check-square" aria-hidden="true"></i> A smart and connected way to live</li>
          </ul>

          <div class="founder-text">
              <p>Who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur.</p>
              <h3>- ABC, Founder.</h3>
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
        <p class="heading_space">Eagle Developers (Pvt) Limited is known for delivering best 
          development projects in the most stringent timelines and extraordinary 
          work requirements of a wide spectrum of clients. The Eagle group has 
          undertaken prestigious projects of national and international 
          significance. Just like this masterpiece we have designed here using 
          our years of experience. Despite the fact that it is masterfully 
          engineered with ultramodern design and features, the project is 
          surprisingly affordable, which makes it a brilliant choice. </p>
      </div>
      <div class="col-sm-1 col-md-2"></div>
    </div>

  

  </div>
</div>


<section class="page-section-ptb">
  <div class="container">
    <div class="custom-content">

      <div class="row">
        <div class="col-xs-12 bottom40">
          <h2>Registration</h2>
          <div class="line_1"></div>
          <div class="line_2"></div>
          <div class="line_3"></div>
          <p>Get print of empty downloaded Application Form to fill manually.Submit 
            the signed Application Form along with all attachments to the 
            authorized Dealer or at Site Office.
            <br>
            <p>
            - OR -
            
            Become a Smart Member of smart city and proceed online to register.</p>
        </div>
      </div>

      <div class="row">

        <div class="col-lg-12 col-md-12">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="feature-text left-icon">
                <div class="feature-icon">
                  <i class="icon-copy"></i>
                </div>
                <div class="feature-info">
                  <h5>Manual Registration</h5>
                  <a href="{{ route('download') }}" class="btn btn-danger">DownLoad Form</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="feature-text left-icon">
                <div class="feature-icon">
                  <i class="icon-desktop"></i>
                </div>
                <div class="feature-info">
                  <h5>Online Registration</h5>
                  <button class="btn btn-danger">Register</button>
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
                <p>Here is a comprehensive guide that not only answers some of the most 
                  frequently asked questions or FAQs about Eagle City but also explains 
                  why it is one of the best options in Sargodha right now.</p>
              </div>

              <ul class="services-list">
                <li> Free of Cost Marketplace for Agents</li>
                <li> Free advertisement of Properties</li>
                <li>Ease in Searching and Buying Properties</li>
                <li>Online  availing of our smart services</li>
                <li>Personalized portal for our valued Customers</li>
                <li>Only smart city of Sargodha</li>
                <li>Estate Planning and Development</li>
              </ul>

              <a href="{{route('about')}}" class="btn_fill">Read More</a>

            </div>
          </div>

        </div>
      </div>

    </div>

  </div>
</section>




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
      @foreach (App\Models\Property::all()->take(6) as $property)
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
    
  </div>
</section>

<section id="property" class="bg_light padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 bottom40">
        <h2 class="uppercase">PLot <span class="color_red">LISTINGS</span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
        <p>We have Properties in these Areas View a list of Featured Properties.</p>
      </div>
    </div>
    <div class="row">
      @foreach (App\Models\Plot::all()->take(6) as $plot)
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="property_item heading_space">
          <div class="image">
            <img src="{{$plot->image}}" alt="listin" class="img-responsive">
            <div class="overlay">
              <div class="centered"><a class="link_arrow white_border"
                  href="{{route('plot_detail',$plot->id)}}">View Detail</a></div>
            </div>
            <div class="feature"><span class="tag">Featured</span></div>
            <div class="price"><span class="tag">For Sale</span></div>
            <div class="property_meta">
              <span><i class="fa fa-object-group"></i>{{$plot->area}} sq ft </span>
            </div>
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3><a href="property_details_1.html">{{$plot->address}}</a></h3>
              <span class="bottom10">{{$plot->city}}</span>
              <p><strong>PKR:{{$plot->price}}/-</strong></p>
            </div>
            <div class="favroute clearfix">
              <p class="pull-left"><i class="icon-calendar2"></i> {{$plot->created_at->diffForHumans()}}</p>

            </div>
          </div>
        </div>
      </div>
      @endforeach
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
          <p>Eagle City is also a great place to live for families with children, as campuses of various reputable schools.The remarkable project of Eagle City takes this concept a step further by offering its residents around-the-clock management service that will allow them to call the admin office located in the basement whenever they require any help.Though the top-quality fittings and expensive fixtures in each apartment, as well as the regular maintenance of the building, will ensure the residents don’t face any issues for a long time, it is still comforting to know that assistance is merely a call away, if needed. </p>
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
              <h4>Lahore Road,</h4>
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