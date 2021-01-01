@extends('layouts.front')
@section('content')
<section class="property-details padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-uppercase">{{$service->title}}</h2>
          <p class="">{{$service->address}}</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 property-details-2">
          <div id="agent-2-slider" class="owl-carousel">
            <div class="item">
              <div class="property_item heading_space">
                <div class="image">
                  <a href="#."><img src="{{$service->image}}" alt="listin" class="img-responsive"></a>
                  
                  <div class="property_meta">
                    <h4>PKR: {{$service->price}}</h4>
                  </div>
                </div>
              </div>
            </div>
            {{-- <div class="item">
              <div class="property_item heading_space">
                <div class="image">
                  <a href="#."><img src="{{$service->image}}" alt="listin" class="img-responsive"></a>
                  <div class="price"><span class="tag">For Sale</span></div>
                  <div class="property_meta">
                    <h4>$8,600</h4><p>For Small Family House</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="property_item heading_space">
                <div class="image">
                  <a href="#."><img src="{{$service->image}}" alt="listin" class="img-responsive"></a>
                  <div class="price"><span class="tag">For Sale</span></div>
                  <div class="property_meta">
                    <h4>$8,600</h4><p>For Small Family House</p>
                  </div>
                </div>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="property-tab">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
              <li role="presentation"><a href="#summary" aria-controls="summary" role="tab" data-toggle="tab">Summary</a></li>
              <li role="presentation"><a href="#tab_contact" aria-controls="tab_contact" role="tab" data-toggle="tab">Contact</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="description">
                <h3 class="text-uppercase  bottom20 top10">Property <span class="color_red">Description</span></h3>
                <p class="p-font-15">{{$service->description}}</p>
                
        
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
                          <td><b>Service Id</b></td>
                          <td class="text-right">{{$service->id}}</td>
                        </tr>
                        <tr>
                          <td><b>Price</b></td>
                          <td class="text-right">{{$service->price}}</td>
                        </tr>
                        <tr>
                          <td><b>Property Size</b></td>
                          <td class="text-right">{{$service->area}}ft2</td>
                        </tr>
                        <tr>
                          <td><b>Bedrooms</b></td>
                          <td class="text-right">{{$service->bedrooms}}</td>
                        </tr>
                        <tr>
                          <td><b>Bathrooms</b></td>
                          <td class="text-right">{{$service->bathrooms}}</td>
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
                    <div class="agent-p-img"> <img src="{{$service->image}}" height="400px" width="400px" class="img-responsive" alt="image" /> </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="agent-p-contact">
                      <div class="our-agent-box">
                        <h3 class="bottom10">{{$service->title}}</h3>
                        <p class="bottom30">{{$service->description}}</p>
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
                    <form class="findus">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="single-query">
                            <input type="text" placeholder="Your Name" class="keyword-input">
                          </div>
                          <div class="single-query">
                            <input type="text" placeholder="Phone Number" class="keyword-input">
                          </div>
                          <div class="single-query">
                            <input type="text" placeholder="Email Adress" class="keyword-input">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="single-query">
                            <textarea placeholder="Massege"></textarea>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <input type="submit" value="Submit Now" class="btn_fill">
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
  
  <div class="container">
    <div class="row">
      <div class="col-xs-12 padding_top bottom40">
        <h2 class="text-uppercase">Property <span class="color_red">Map</span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div id="map_canvas"></div>
      </div>
    </div>
  </div>
 
@endsection