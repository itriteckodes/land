@extends('layouts.front')
@section('style')
<style>
    #map-canvas {
        height: 600px;
        width: 100%;
    }
</style>

@endsection
@section('content')
<div class="page-title page-main-section parallaxie" style="background-image: url(images/titlebg-1.jpg);">
    <div class="container padding-bottom-top-120 text-uppercase text-center">
        <div class="main-title">
            <h1>Maps</h1>
            <h5>Map pointing all our plots for sale</h5>
            <div class="line_4"></div>
            <div class="line_5"></div>
            <div class="line_6"></div>
            <a href="index.html">home</a><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span><a
                href="contact-us.html">Maps</a>
        </div>
    </div>
</div>
<section id="contact-us-2" class="padding parallaxie">

    <div class="container-fluid">

        <div class="row">


            <div id="map-canvas"></div>
        </div>
    </div>
</section>

@endsection

@section('script')
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

<script>
    var property_list = [
        @foreach($maps as $map )
        {latlong: "{{$map->lat}},{{$map->long}}"}, 
         @endforeach
        
    ],
    options = {
        zoom: 12,
        center: new google.maps.LatLng( 32.0740, 72.6861 ),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    },
    map = new google.maps.Map( 
        document.getElementById( 'map-canvas' ), 
        options 
    );

for( var index = 0; index < property_list.length; index++ ) {
    var latlong = property_list[index]['latlong'].split(','),
        latlng = new google.maps.LatLng( latlong[0], latlong[1] ),
        marker = new google.maps.Marker( {position: latlng, map: map} );
    marker.setMap( map );
};

</script>
@endsection