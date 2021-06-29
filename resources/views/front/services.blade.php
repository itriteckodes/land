@extends('layouts.front')
@section('content')
<section id="listings" class="padding">
    <div class="container">
      <div class="row bottom40">
        <div class="col-xs-12">
          <h2 class="uppercase">Services <span class="color_red">Listing</span></h2>
          <div class="line_1"></div>
          <div class="line_2"></div>
          <div class="line_3"></div>
        </div>
      </div>
      <div class="row bottom30">
        @foreach ($services as $service)
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="property_item heading_space">
            <div class="image">
              <img src="{{$service->image}}" alt="listin" class="img-responsive">
              <div class="overlay">
                <div class="centered"><a class="link_arrow white_border"
                    href="{{route('service_detail',$service->id)}}">View Detail</a></div>
              </div>
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3><a href="#">{{$service->title}}</a></h3>
                <span class="bottom10">{{$service->city}}</span>
                <p><strong>PKR:{{$service->price}}</strong></p>
              </div>
            </div>
          </div>
        </div>
        @endforeach
  
      </div>
  </section>
@endsection 