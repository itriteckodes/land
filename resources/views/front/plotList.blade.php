@extends('layouts.front')
@section('content')
<section id="listings" class="padding">
  <div class="container">
    <div class="row bottom40">
      <div class="col-xs-12">
        <h2 class="uppercase">PLOT <span class="color_red">LISTINGS</span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
      </div>
    </div>
    <div class="row bottom30">
      @foreach ($plots as $plot)
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
              <p><strong>$83,600,200</strong></p>
            </div>
            <div class="favroute clearfix">
              <p class="pull-left"><i class="icon-calendar2"></i> {{$plot->created_at->diffForHumans()}}</p>

            </div>
          </div>
        </div>
      </div>
      @endforeach

    </div>
</section>
@endsection