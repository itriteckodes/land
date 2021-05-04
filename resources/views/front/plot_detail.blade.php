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

  .bg-danger {
    background-color: red;
  }
</style>
@endsection
@section('content')
<section class="property-details padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-uppercase">{{$plot->title}}</h2>
        <p class="">{{$plot->address}}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 property-details-2">
        <div id="" class="">
          <div class="item">
            <div class="property_item heading_space">
              <div class="">
                <iframe style="width: 100%" height="500px" src="http://maps.google.com/maps?q={{$plot->lat}},{{$plot->long}}&z=15&output=embed">
                </iframe>
                <div class="price"><span class="tag">For Sale</span></div>
                <div class="property_meta">
                  <h4 style="color: white">PKR: {{$plot->price}} /-</h4>
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
            <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
            <li role="presentation"><a href="#summary" aria-controls="summary" role="tab" data-toggle="tab">Summary</a>
            </li>
            <li role="presentation"><a href="#tab_contact" aria-controls="tab_contact" role="tab" data-toggle="tab">Contact</a></li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="description">
              <h3 class="text-uppercase  bottom20 top10">Property <span class="color_red">Description</span></h3>
              <p class="p-font-15">{{$plot->description}}</p>

              <div class="property_meta bottom40">
                <span><i class="fa fa-object-group"></i>{{$plot->area}} sq ft </span>
                <span><i class="fa fa-bed"></i>{{$plot->bedrooms}} Bedrooms</span>
                <span><i class="fa fa-bath"></i>{{$plot->bathrooms}} Bathroom</span>
                <span><i class="fa fa-car"></i>{{$plot->garage}} Garage</span>
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
                        <td class="text-right">{{$plot->id}}</td>
                      </tr>
                      <tr>
                        <td><b>Price</b></td>
                        <td class="text-right">{{$plot->price}}</td>
                      </tr>
                      <tr>
                        <td><b>Property Size</b></td>
                        <td class="text-right">{{$plot->area}}ft2</td>
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
                  <div class="agent-p-img"> <img src="{{$plot->agent->image}}" height="400px" width="400px" class="img-responsive" alt="image" /> </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="agent-p-contact">
                    <div class="our-agent-box">
                      <h3 class="bottom10">{{$plot->agent->name}}</h3>
                      <p class="bottom30">{{$plot->description}}</p>
                    </div>
                    <div class="agetn-contact">
                      <h6>Mobile:</h6>
                      <h6>Email Adress:</h6>
                    </div>
                    <div class="agetn-contact-2">
                      <p>{{$plot->agent->phone}}</p>
                      <p>{{$plot->agent->email}}</p>
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
                        <input type="text" name="plot_id" value="{{$plot->id}}" hidden>
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

<h3 style="margin-left: 150px">Following Plot is Highlighted on the Eagle City Map</h3>
<br>
<div class="bar container">
  <section class="">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-1 mt-3">
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
                <h5 class=" text-center pt-5 text-light" style="padding-bottom: 100px!important;">Street 1</h5>
              </div>
              <!-- <div class="col-md-12 bg-dark">
                <h5 class="text-center text-dark">Street 1</h5>
              </div> -->
              <div class="col-md-12 p-0 bg-dark" style="margin-top: 5px;">
                <h5 class=" text-center text-light" style="padding-top: 45px!important; padding-bottom: 70px!important;">Main</h5>
              </div>
              <!-- <div class="col-md-12 bg-dark">
                <h5 class="text-center py-5 text-dark">Main</h5>
              </div> -->
              <div class="col-md-12 bg-dark" style="margin-top: 5px;">
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
                <h5 class=" text-center text-light" style="padding-bottom: 89px!important;">Street 1</h5>
              </div>
              <!-- <div class="col-md-12 bg-dark">
                <h5 class=" text-center text-light">Street 1</h5>
              </div> -->
            </div>
          </div>
          <div class="col-md-4">
            <div class="row m-0 p-0">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="{{($plot->id ===1) ? 'bg-danger':'bg-secondary'}}">
                      <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="{{($plot->id ===2) ? 'bg-danger':'bg-secondary'}}">
                      <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="{{($plot->id ===3) ? 'bg-danger':'bg-secondary'}}">
                      <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="{{($plot->id ===3) ? 'bg-danger':'bg-secondary'}}">
                      <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="{{($plot->id ===5) ? 'bg-danger':'bg-secondary'}}">
                      <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="{{($plot->id ===6) ? 'bg-danger':'bg-secondary'}}">
                      <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                    </div>
                  </div>
                  <div class="col-md-12 bg-dark" style="margin-top: 7px;">
                    <h5 class="text-center" style="padding:55px 0px 60px 0px">Main</h5>
                    
                  </div>
                  <div class="col-md-6">
                    <div class="{{($plot->id ===7) ? 'bg-danger':'bg-secondary'}}">
                      <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="{{($plot->id ===8) ? 'bg-danger':'bg-secondary'}}">
                      <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="{{($plot->id ===9) ? 'bg-danger':'bg-secondary'}}">
                      <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="{{($plot->id ===10) ? 'bg-danger':'bg-secondary'}}">
                      <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="{{($plot->id ===11) ? 'bg-danger':'bg-secondary'}}">
                      <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="{{($plot->id ===12) ? 'bg-danger':'bg-secondary'}}">
                      <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-md-1 mt-3">
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
                <h5 class=" text-center pt-5 text-light" style="padding-bottom: 100px!important;">Street 2</h5>
              </div>
              <!-- <div class="col-md-12 bg-dark">
                <h5 class="text-center text-dark">Street 1</h5>
              </div> -->
              <div class="col-md-12 m-4 bg-dark" style="margin-top: 5px;border-radius:48%">
                <h5 class=" text-center text-light" style="padding-top: 45px!important; padding-bottom: 70px!important;">Roundabout </h5>
              </div>
              <!-- <div class="col-md-12 bg-dark">
                <h5 class="text-center py-5 text-dark">Main</h5>
              </div> -->
              <div class="col-md-12 bg-dark" style="margin-top: 5px;">
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
                <h5 class=" text-center text-light" style="padding-bottom: 89px!important;">Street 2</h5>
              </div>
              <!-- <div class="col-md-12 bg-dark">
                <h5 class=" text-center text-light">Street 1</h5>
              </div> -->
            </div>
          </div>
          <div class="col-md-4">
            <div class="row m-0 p-0">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="{{($plot->id ===13) ? 'bg-danger':'bg-secondary'}}">
                      <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="{{($plot->id ===14) ? 'bg-danger':'bg-secondary'}}">
                      <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="{{($plot->id ===15) ? 'bg-danger':'bg-secondary'}}">
                      <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="{{($plot->id ===16) ? 'bg-danger':'bg-secondary'}}">
                      <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="{{($plot->id ===17) ? 'bg-danger':'bg-secondary'}}">
                      <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="{{($plot->id ===18) ? 'bg-danger':'bg-secondary'}}">
                      <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                    </div>
                  </div>
                  <div class="col-md-12 bg-dark" style="margin-top: 7px;">
                      <h5 class="text-center" style="padding:55px 0px 60px 0px">Main</h5>
                   </div>
                  <div class="col-md-6">
                    <div class="{{($plot->id ===19) ? 'bg-danger':'bg-secondary'}}">
                      <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="{{($plot->id ===20) ? 'bg-danger':'bg-secondary'}}">
                      <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="{{($plot->id ===21) ? 'bg-danger':'bg-secondary'}}">
                      <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="{{($plot->id ===22) ? 'bg-danger':'bg-secondary'}}">
                      <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="{{($plot->id ===23) ? 'bg-danger':'bg-secondary'}}">
                      <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="{{($plot->id ===24) ? 'bg-danger':'bg-secondary'}}">
                      <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-md-1 mt-4">
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
                <h5 class=" text-center pt-5 text-light" style="padding-bottom: 100px!important;">Street 3</h5>
              </div>
              <!-- <div class="col-md-12 bg-dark">
                <h5 class="text-center text-dark">Street 1</h5>
              </div> -->
              <div class="col-md-12 p-0 bg-dark" style="margin-top: 5px;">
                <h5 class=" text-center text-light" style="padding-top: 45px!important; padding-bottom: 70px!important;">Main</h5>
              </div>
              <!-- <div class="col-md-12 bg-dark">
                <h5 class="text-center py-5 text-dark">Main</h5>
              </div> -->
              <div class="col-md-12 bg-dark" style="margin-top: 5px;">
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
                <h5 class=" text-center text-light" style="padding-bottom: 89px!important;">Street 3</h5>
              </div>
              <!-- <div class="col-md-12 bg-dark">
                <h5 class=" text-center text-light">Street 1</h5>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

@endsection