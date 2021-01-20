@extends('layouts.front')

@section('style')

<style>
  .text-center {
    height: 60px;
    margin-top: 8px;
  }

  .street {
    width: 50px;
  }

  .bar {
    overflow-x: hidden;
    width: 80%;
  }

  .bg-secondary {
    background-color: grey;
  }

  .bg-dark {
    background-color: rgb(19, 12, 12);
  }

  .text-light {
    color: white;
  }
</style>
@endsection
@section('content')
<section class="property-details padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-uppercase">{{$property->title}}</h2>
        <p class="">{{$property->address}}</p>
        <br>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 property-details-2">
        <div id="agent-2-slider" class="owl-carousel">
          <div class="item">
            <div class="property_item heading_space">
              <div class="image">
                <a href="#."><img src="{{$property->image1}}" alt="listin" class="img-responsive"></a>
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
                  <h4> PKR: {{$property->price}}</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="property_item heading_space">
              <div class="image">
                <a href="#."><img src="{{$property->image2}}" alt="listin" class="img-responsive"></a>
                <div class="price"><span class="tag">For Sale</span></div>
                <div class="property_meta">
                  <h4> PKR: {{$property->price}}</h4>

                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="property_item heading_space">
              <div class="image">
                <a href="#."><img src="{{$property->image3}}" alt="listin" class="img-responsive"></a>
                <div class="price"><span class="tag">For Sale</span></div>
                <div class="property_meta">
                  <h4> PKR: {{$property->price}}</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="property-tab">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab"
                data-toggle="tab">Description</a></li>
            <li role="presentation"><a href="#summary" aria-controls="summary" role="tab" data-toggle="tab">Summary</a>
            </li>
            <li role="presentation"><a href="#tab_contact" aria-controls="tab_contact" role="tab"
                data-toggle="tab">Contact</a></li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="description">
              <h3 class="text-uppercase  bottom20 top10">Property <span class="color_red">Description</span></h3>
              <p class="p-font-15">{{$property->description}}</p>
              <br>
              <div class="property_meta bottom40">
                <span><i class="fa fa-object-group"></i>{{$property->area}} sq ft </span>
                <span><i class="fa fa-bed"></i>{{$property->bedrooms}} Bedrooms</span>
                <span><i class="fa fa-bath"></i>{{$property->bathrooms}} Bathroom</span>
                <span><i class="fa fa-car"></i>{{$property->garage}} Garage</span>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="summary">
              <div class="row property-d-table">
                <div class="col-md-12">
                  <h3 class="text-uppercase  bottom30 top10">Quick <span class="color_red">Summary</span></h3>
                </div>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  <table class="table table-striped table-responsive">
                    <tbody>
                      <tr>
                        <td><b>Property Id</b></td>
                        <td class="text-right">{{$property->id}}</td>
                      </tr>
                      <tr>
                        <td><b>Price</b></td>
                        <td class="text-right">{{$property->price}}</td>
                      </tr>
                      <tr>
                        <td><b>Property Size</b></td>
                        <td class="text-right">{{$property->area}}ft2</td>
                      </tr>
                      <tr>
                        <td><b>Bedrooms</b></td>
                        <td class="text-right">{{$property->bedrooms}}</td>
                      </tr>
                      <tr>
                        <td><b>Bathrooms</b></td>
                        <td class="text-right">{{$property->bathrooms}}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

              </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="tab_contact">
              <div class="row">
                <div class="col-md-12">
                  <h3 class="text-uppercase  bottom30 top10">Contact <span class="color_red">Agent</span></h3>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="agent-p-img"> <img src="{{$property->agent->image}}" height="400px" width="400px"
                      class="img-responsive" alt="image" /> </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="agent-p-contact">
                    <div class="our-agent-box">
                      <h3 class="bottom10">{{$property->agent->name}}</h3>
                      <p class="bottom30">{{$property->description}}</p>
                    </div>
                    <div class="agetn-contact">
                      <h6>Mobile:</h6>
                      <h6>Email Adress:</h6>
                    </div>
                    <div class="agetn-contact-2">
                      <p>{{$property->agent->phone}}</p>
                      <p>{{$property->agent->email}}</p>
                    </div>
                  </div>
                  <ul class="socials">
                    <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#."><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#."><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#."><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#."><i class="fa fa-pinterest"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="row top30">
                <div class="col-xs-12">
                  <form class="findus" action="{{route('save_lead')}}" method="POST">
                    @csrf
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="single-query">
                          <input type="text" name="name" placeholder="Your Name" class="keyword-input">
                        </div>
                        <input type="text" name="property_id" value="{{$property->id}}" hidden>
                        <div class="single-query">
                          <input type="text" name="phone" placeholder="Phone Number" class="keyword-input">
                        </div>
                        <div class="single-query">
                          <input type="email" name="email" placeholder="Email Adress" class="keyword-input">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="single-query">
                          <textarea name="message" placeholder="Massege"></textarea>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <button type="submit" class="btn_fill">Submit Now</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="social-networks top40">
                    <div class="social-icons-2">
                      <span class="share-it">Share: </span>
                      <span><a href="#."> Facebook</a></span>
                      <span><a href="#.">Twitter</a></span>
                      <span><a href="#."> Google +</a></span>
                    </div>
                  </div>
                </div>
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

{{-- <div class="container">
  <div class="row">
    <div class="col-xs-12 padding_top bottom40">
      <h2 class="text-uppercase">Property <span class="color_red">Map</span></h2>
      <div class="line_1"></div>
      <div class="line_2"></div>
      <div class="line_3"></div>
    </div>
  </div>
</div> --}}

{{-- <div class="bar container">
  <section class="">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-1 ">
            <div class="row mt-3">
              <div class="col-md-12 bg-dark pt-5">
                <h5 class=" text-center py-5 text-light">Street 2</h5>
              </div>
              <div class="col-md-12 bg-dark">
                <h5 class="text-center py-5 text-dark">Street 2</h5>
              </div>
              <div class="col-md-12 bg-dark">
                <h5 class=" text-center py-5 text-light">Street 2</h5>
              </div>
              <div class="col-md-12 bg-dark">
                <h5 class="text-center py-5 text-dark">Street 2</h5>
              </div>
              <div class="col-md-12 bg-dark">
                <h5 class=" text-center py-5 text-light">Street 2</h5>
              </div>
              <div class="col-md-12 bg-dark">
                <h5 class="text-center py-5 text-dark">Street 2</h5>
              </div>
              <div class="col-md-12 bg-dark">
                <h5 class=" text-center py-5 text-light">Street 2</h5>
              </div>
              <div class="col-md-12 bg-dark">
                <h5 class="text-center py-5 text-dark">Street 2</h5>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="row">
              <div class="col-md-12">
                <div class=" bg-secondary">
                  <h5 class="text-center" style="padding:55px">6x4</h5>
                </div>
              </div>
              <div class="col-md-12">
                <div class=" py-5 bg-secondary" >
                  <h5 class=" text-center"  style="padding:55px">6x4</h5>
                </div>
              </div>
              <div class="col-md-12 ">
                <div class="py-5 bg-secondary">
                  <h5 class=" text-center" style="padding:55px">6x4</h5>
                </div>
              </div>
              <div class="col-md-12 mt-1">
                <div class="py-5 bg-secondary">
                  <h5 class="text-center" style="padding:55px">6x4</h5>
                </div>
              </div>
              <div class="col-md-12 mt-1">
                <div class="py-5 bg-secondary">
                  <h5 class="text-center" style="padding:55px">6x4</h5>
                </div>
              </div>
              <div class="col-md-12 mt-1">
                <div class="py-5 bg-secondary">
                  <h5 class="text-center" style="padding:55px">6x4</h5>
                </div>
              </div>


            </div>
          </div>
          <div class="col-md-1 ">
            <div class="row mt-3">
              <div class="col-md-12 bg-dark pt-5">
                <h5 class=" text-center py-5 text-light">Street 1</h5>
              </div>
              <div class="col-md-12 bg-dark">
                <h5 class="text-center py-5 text-dark">Street 1</h5>
              </div>
              <div class="col-md-12 bg-dark">
                <h5 class=" text-center py-5 text-light">Street 1</h5>
              </div>
              <div class="col-md-12 bg-dark">
                <h5 class="text-center py-5 text-dark">Street 1</h5>
              </div>
              <div class="col-md-12 bg-dark">
                <h5 class=" text-center py-5 text-light">Street 1</h5>
              </div>
              <div class="col-md-12 bg-dark">
                <h5 class="text-center py-5 text-dark">Street 1</h5>
              </div>
              <div class="col-md-12 bg-dark">
                <h5 class=" text-center py-5 text-light">Street 1</h5>
              </div>
              <div class="col-md-12 bg-dark">
                <h5 class="text-center py-5 text-dark">Street 1</h5>
              </div>
            </div>
          </div>
          <div class="col-md-2 m-0 p-0">
            <div class="row m-0 p-0">
              <div class="col-md-12">
                <div class="py-5 bg-secondary">
                  <h5 class=" text-center" style="padding:55px">6x4</h5>
                </div>
              </div>
              <div class="col-md-12 mt-1">
                <div class=" py-5 bg-secondary">
                  <h5 class=" text-center" style="padding:55px">6x4</h5>
                </div>
              </div>
              <div class="col-md-12 mt-1">
                <div class="py-5 bg-secondary">
                  <h5 class=" text-center" style="padding:55px">6x4</h5>
                </div>
              </div>
              <div class="col-md-12 mt-1">
                <div class="py-5 bg-secondary">
                  <h5 class="text-center" style="padding:55px">6x4</h5>
                </div>
              </div>
              <div class="col-md-12 mt-1">
                <div class="py-5 bg-secondary">
                  <h5 class="text-center" style="padding:55px">6x4</h5>
                </div>
              </div>
              <div class="col-md-12 mt-1">
                <div class="py-5 bg-secondary">
                  <h5 class="text-center" style="padding:55px">6x4</h5>
                </div>
              </div>


            </div>

          </div>
          <div class="col-md-2 m-0 p-0">
            <div class="row m-0 p-0">
              <div class="col-md-12">
                <div class="py-5 bg-secondary">
                  <h5 class=" text-center" style="padding:55px">6x4</h5>
                </div>
              </div>
              <div class="col-md-12 mt-1">
                <div class=" py-5 bg-secondary">
                  <h5 class=" text-center" style="padding:55px">6x4</h5>
                </div>
              </div>
              <div class="col-md-12 mt-1">
                <div class="py-5 bg-secondary">
                  <h5 class=" text-center" style="padding:55px">6x4</h5>
                </div>
              </div>
              <div class="col-md-12 mt-1">
                <div class="py-5 bg-secondary">
                  <h5 class="text-center" style="padding:55px">6x4</h5>
                </div>
              </div>
              <div class="col-md-12 mt-1">
                <div class="py-5 bg-secondary">
                  <h5 class="text-center" style="padding:55px">6x4</h5>
                </div>
              </div>
              <div class="col-md-12 mt-1">
                <div class="py-5 bg-secondary">
                  <h5 class="text-center" style="padding:55px">6x4</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-1 ">
            <div class="row mt-3">
              <div class="col-md-12 bg-dark pt-5">
                <h5 class=" text-center py-5 text-light">Street 3</h5>
              </div>
              <div class="col-md-12 bg-dark">
                <h5 class="text-center py-5 text-dark">Street 3</h5>
              </div>
              <div class="col-md-12 bg-dark">
                <h5 class=" text-center py-5 text-light">Street 3</h5>
              </div>
              <div class="col-md-12 bg-dark">
                <h5 class="text-center py-5 text-dark">Street 3</h5>
              </div>
              <div class="col-md-12 bg-dark">
                <h5 class=" text-center py-5 text-light">Street 3</h5>
              </div>
              <div class="col-md-12 bg-dark">
                <h5 class="text-center py-5 text-dark">Street 3</h5>
              </div>
              <div class="col-md-12 bg-dark">
                <h5 class=" text-center py-5 text-light">Street 2</h5>
              </div>
              <div class="col-md-12 bg-dark">
                <h5 class="text-center py-5 text-dark">Street 2</h5>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="row">
              <div class="col-md-12">
                <div class=" bg-secondary">
                  <h5 class="text-center" style="padding:55px">6x4</h5>
                </div>
              </div>
              <div class="col-md-12">
                <div class=" py-5 bg-secondary" >
                  <h5 class=" text-center"  style="padding:55px">6x4</h5>
                </div>
              </div>
              <div class="col-md-12 ">
                <div class="py-5 bg-secondary">
                  <h5 class=" text-center" style="padding:55px">6x4</h5>
                </div>
              </div>
              <div class="col-md-12 mt-1">
                <div class="py-5 bg-secondary">
                  <h5 class="text-center" style="padding:55px">6x4</h5>
                </div>
              </div>
              <div class="col-md-12 mt-1">
                <div class="py-5 bg-secondary">
                  <h5 class="text-center" style="padding:55px">6x4</h5>
                </div>
              </div>
              <div class="col-md-12 mt-1">
                <div class="py-5 bg-secondary">
                  <h5 class="text-center" style="padding:55px">6x4</h5>
                </div>
              </div>


            </div>
          </div>
          <div class="col-md-1 ">
            <div class="row mt-3">
              <div class="col-md-12 bg-dark pt-5">
                <h5 class=" text-center py-5 text-light">Street 2</h5>
              </div>
              <div class="col-md-12 bg-dark">
                <h5 class="text-center py-5 text-dark">Street 2</h5>
              </div>
              <div class="col-md-12 bg-dark">
                <h5 class=" text-center py-5 text-light">Street 2</h5>
              </div>
              <div class="col-md-12 bg-dark">
                <h5 class="text-center py-5 text-dark">Street 2</h5>
              </div>
              <div class="col-md-12 bg-dark">
                <h5 class=" text-center py-5 text-light">Street 2</h5>
              </div>
              <div class="col-md-12 bg-dark">
                <h5 class="text-center py-5 text-dark">Street 2</h5>
              </div>
              <div class="col-md-12 bg-dark">
                <h5 class=" text-center py-5 text-light">Street 2</h5>
              </div>
              <div class="col-md-12 bg-dark">
                <h5 class="text-center py-5 text-dark">Street 2</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div> --}}



<section id="agent-p-2" class="property-details padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 bottom40">
        <h2 class="text-uppercase">Similar <span class="color_red">Properties </span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
      </div>
    </div>
    <div class="row">
      <div id="property-1-slider" class="owl-carousel">
        <div class="item">
          <div class="property_item heading_space">
            <div class="image">
              <img src="{{asset('front/images/b-d-property-2.jpg')}}" alt="listin" class="img-responsive">
              <div class="overlay">
                <div class="centered"><a class="link_arrow white_border" href="property_details_1.html">View Detail</a>
                </div>
              </div>
              <div class="feature"><span class="tag">Featured</span></div>
              <div class="price"><span class="tag">For Sale</span></div>
              <div class="property_meta">
                <span><i class="fa fa-object-group"></i>530 sq ft </span>
                <span><i class="fa fa-bed"></i>2 Bedrooms</span>
                <span><i class="fa fa-bath"></i>1 Bathroom</span>
              </div>
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3><a href="property_details_1.html">House in New York City</a></h3>
                <span class="bottom10">Merrick Way, Miami, USA</span>
                <p><strong>$83,600,200</strong></p>
              </div>
              <div class="favroute clearfix">
                <p class="pull-left"><i class="icon-calendar2"></i> 3 Days ago</p>
                <ul class="pull-right">
                  <li><a href="#."><i class="icon-video"></i></a></li>
                  <li><a href="#."><i class="icon-like"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="property_item heading_space">
            <div class="image">
              <img src="{{asset('front/images/b-d-property.jpg')}}" alt="listin" class="img-responsive">
              <div class="overlay">
                <div class="centered"><a class="link_arrow white_border" href="property_details_1.html">View Detail</a>
                </div>
              </div>
              <div class="feature"><span class="tag">Featured</span></div>
              <div class="price"><span class="tag">For Sale</span></div>
              <div class="property_meta">
                <span><i class="fa fa-object-group"></i>530 sq ft </span>
                <span><i class="fa fa-bed"></i> 3 Bedrooms</span>
                <span><i class="fa fa-bath"></i>3 Bathroom</span>
              </div>
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3><a href="property_details_1.html">House in New York City</a></h3>
                <span class="bottom10">Merrick Way, Miami, USA</span>
                <p><strong>$83,600,200</strong></p>
              </div>
              <div class="favroute clearfix">
                <p class="pull-left"><i class="icon-calendar2"></i> 3 Days ago</p>
                <ul class="pull-right">
                  <li><a href="#."><i class="icon-video"></i></a></li>
                  <li><a href="#."><i class="icon-like"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="property_item heading_space">
            <div class="image">
              <img src="{{asset('front/images/b-d-property-2.jpg')}}" alt="listin" class="img-responsive">
              <div class="overlay">
                <div class="centered"><a class="link_arrow white_border" href="property_details_1.html">View Detail</a>
                </div>
              </div>
              <div class="feature"><span class="tag">Featured</span></div>
              <div class="price"><span class="tag">For Sale</span></div>
              <div class="property_meta">
                <span><i class="fa fa-object-group"></i>530 sq ft </span>
                <span><i class="fa fa-bed"></i>2 Bedrooms</span>
                <span><i class="fa fa-bath"></i>1 Bathroom</span>
              </div>
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3><a href="property_details_1.html">House in New York City</a></h3>
                <span class="bottom10">Merrick Way, Miami, USA</span>
                <p><strong>$83,600,200</strong></p>
              </div>
              <div class="favroute clearfix">
                <p class="pull-left"><i class="icon-calendar2"></i> 3 Days ago</p>
                <ul class="pull-right">
                  <li><a href="#."><i class="icon-video"></i></a></li>
                  <li><a href="#."><i class="icon-like"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="property_item heading_space">
            <div class="image">
              <img src="{{asset('front/images/b-d-property-2.jpg')}}" alt="listin" class="img-responsive">
              <div class="overlay">
                <div class="centered"><a class="link_arrow white_border" href="property_details_1.html">View Detail</a>
                </div>
              </div>
              <div class="feature"><span class="tag">Featured</span></div>
              <div class="price"><span class="tag">For Sale</span></div>
              <div class="property_meta">
                <span><i class="fa fa-object-group"></i>5,302 sq ft </span>
                <span><i class="fa fa-bed"></i>2 Bedrooms</span>
                <span><i class="fa fa-bath"></i>1 Bathroom</span>
              </div>
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3><a href="property_details_1.html">House in New York City</a></h3>
                <span class="bottom10">Merrick Way, Miami, USA</span>
                <p><strong>$83,600,200</strong></p>
              </div>
              <div class="favroute clearfix">
                <p class="pull-left"><i class="icon-calendar2"></i> 3 Days ago</p>
                <ul class="pull-right">
                  <li><a href="#."><i class="icon-video"></i></a></li>
                  <li><a href="#."><i class="icon-like"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="property_item heading_space">
            <div class="image">
              <img src="{{asset('front/images/b-d-property.jpg')}}" alt="listin" class="img-responsive">
              <div class="overlay">
                <div class="centered"><a class="link_arrow white_border" href="property_details_1.html">View Detail</a>
                </div>
              </div>
              <div class="feature"><span class="tag">Featured</span></div>
              <div class="price"><span class="tag">For Sale</span></div>
              <div class="property_meta">
                <span><i class="fa fa-object-group"></i>5,630 sq ft </span>
                <span><i class="fa fa-bed"></i>6 Bedrooms</span>
                <span><i class="fa fa-bath"></i>8 Bathroom</span>
              </div>
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3><a href="property_details_1.html">House in New York City</a></h3>
                <span class="bottom10">Merrick Way, Miami, USA</span>
                <p><strong>$83,600,200</strong></p>
              </div>
              <div class="favroute clearfix">
                <p class="pull-left"><i class="icon-calendar2"></i> 3 Days ago</p>
                <ul class="pull-right">
                  <li><a href="#."><i class="icon-video"></i></a></li>
                  <li><a href="#."><i class="icon-like"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="property_item heading_space">
            <div class="image">
              <img src="{{asset('front/images/b-d-property-2.jpg')}}" alt="listin" class="img-responsive">
              <div class="overlay">
                <div class="centered"><a class="link_arrow white_border" href="property_details_1.html">View Detail</a>
                </div>
              </div>
              <div class="feature"><span class="tag">Featured</span></div>
              <div class="price"><span class="tag">For Sale</span></div>
              <div class="property_meta">
                <span><i class="fa fa-object-group"></i>530 sq ft </span>
                <span><i class="fa fa-bed"></i>2 Bedrooms</span>
                <span><i class="fa fa-bath"></i>1 Bathroom</span>
              </div>
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3><a href="property_details_1.html">House in New York City</a></h3>
                <span class="bottom10">Merrick Way, Miami, USA</span>
                <p><strong>$83,600,200</strong></p>
              </div>
              <div class="favroute clearfix">
                <p class="pull-left"><i class="icon-calendar2"></i> 3 Days ago</p>
                <ul class="pull-right">
                  <li><a href="#."><i class="icon-video"></i></a></li>
                  <li><a href="#."><i class="icon-like"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection