@extends('layouts.front')
@section('content')
<div class="page-title page-main-section parallaxie">
    <div class="container padding-bottom-top-120 text-uppercase text-center">
      <div class="main-title">
        <h1>Our Team</h1>
        <h5>10 Years Of Experience!</h5>
        <div class="line_4"></div>
        <div class="line_5"></div>
        <div class="line_6"></div>
      </div>
    </div>
  </div>
  <!--===== #/PAGE TITLE =====--> 
  
  
  
  <!--===== AGENTS =====--> 
  <section id="agent-1" class="padding">
    <div class="container">
      <div class="row">
        @foreach ($agents as $agent)
        <div class="col-md-4 col-sm-4 col-xs-12 text-center">
          <div class="effects clearfix">
            <div class="img">
              <div class="gri">
                <figure class="effect-layla">
                  <img src="{{$agent->image}}" alt="">
                  <figcaption> </figcaption>
                </figure>
              </div>
            </div>
          </div>
          <div class="agent-text">
            <h3>{{$agent->name}}</h3>
            <a href="{{route('agent_property',$agent->id)}}" class="link_arrow">show properties</a>
          </div>
        </div>
        @endforeach
        
    </div>
  </section>
@endsection