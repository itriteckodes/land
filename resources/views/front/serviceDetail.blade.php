@extends('layouts.front')
@section('content')
<section class="property-details padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-uppercase">Service: {{$service->title}}</h2>
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
                    <h4>PKR: {{$service->price}}/month</h4>
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
              <li role="presentation"><a href="#tab_contact" aria-controls="tab_contact" role="tab" data-toggle="tab">Contact</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="description">
                <h3 class="text-uppercase  bottom20 top10">Property <span class="color_red">Description</span></h3>
                <p class="p-font-15">{{$service->description}}</p>
                
        
              </div>
              <div role="tabpanel" class="tab-pane" id="tab_contact">
                <div class="row">
                  <div class="col-md-12">
                    <h3 class="text-uppercase  bottom30 top10">Contact <span class="color_red">Admin</span></h3>
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
                          <input type="text" name="service_id" value="{{$service->id}}" hidden>
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
                          <button type="submit"  class="btn_fill">Submit Now</button>
                        </div>
                      </div>
                    </form>
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
 
 
@endsection