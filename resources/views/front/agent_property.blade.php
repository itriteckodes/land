@extends('layouts.front')
@section('content')
<section id="listings" class="padding">
  <div class="container">
    <div class="row bottom40">
      <div class="col-xs-12">
        <h2 class="uppercase">PROPERTY <span class="color_red">LISTINGS</span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
        <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
      </div>
    </div>
    <div class="row bottom30">
      @foreach ($properties as $property)
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
</section>
@endsection