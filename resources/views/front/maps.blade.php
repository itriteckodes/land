@extends('layouts.front')
@section('style')
<style>
    #map-canvas {
        height: 600px;
        width: 100%;
    }
</style>
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
<section class="padding parallaxie container-fluid" style="margin-top:100px ; margin-left:50px" >
    <div class="row ">
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
                            <h5 class=" text-center pt-5 text-light" style="padding-bottom: 100px!important;">Street 1
                            </h5>
                        </div>
                        <!-- <div class="col-md-12 bg-dark">
                <h5 class="text-center text-dark">Street 1</h5>
              </div> -->
                        <div class="col-md-12 p-0 bg-dark" style="margin-top: 5px;">
                            <h5 class=" text-center text-light"
                                style="padding-top: 45px!important; padding-bottom: 70px!important;">Main</h5>
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
                                    <div class="bg-secondary">
                                        <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-secondary">
                                        <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-secondary">
                                        <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-secondary">
                                        <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-secondary">
                                        <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-secondary">
                                        <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                                    </div>
                                </div>
                                <div class="col-md-12 bg-dark" style="margin-top: 7px;">
                                    <h5 class="text-center" style="padding:55px 0px 60px 0px">Main</h5>

                                </div>
                                <div class="col-md-6">
                                    <div class="bg-secondary">
                                        <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-secondary">
                                        <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-secondary">
                                        <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-secondary">
                                        <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-secondary">
                                        <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-secondary">
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
                            <h5 class=" text-center pt-5 text-light" style="padding-bottom: 100px!important;">Street 2
                            </h5>
                        </div>
                        <!-- <div class="col-md-12 bg-dark">
                <h5 class="text-center text-dark">Street 1</h5>
              </div> -->
                        <div class="col-md-12 m-4 bg-dark" style="margin-top: 5px;border-radius:48%">
                            <h5 class=" text-center text-light"
                                style="padding-top: 45px!important; padding-bottom: 70px!important;">Roundabout </h5>
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
                                    <div class="bg-secondary">
                                        <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-secondary">
                                        <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-secondary">
                                        <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-secondary">
                                        <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-secondary">
                                        <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-secondary">
                                        <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                                    </div>
                                </div>
                                <div class="col-md-12 bg-dark" style="margin-top: 7px;">
                                    <h5 class="text-center" style="padding:55px 0px 60px 0px">Main</h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-secondary">
                                        <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-secondary">
                                        <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-secondary">
                                        <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-secondary">
                                        <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-secondary">
                                        <h5 class="text-center" style="padding:55px 0px 63px 0px">6x4</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-secondary">
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
                            <h5 class=" text-center pt-5 text-light" style="padding-bottom: 100px!important;">Street 3
                            </h5>
                        </div>
                        <!-- <div class="col-md-12 bg-dark">
                <h5 class="text-center text-dark">Street 1</h5>
              </div> -->
                        <div class="col-md-12 p-0 bg-dark" style="margin-top: 5px;">
                            <h5 class=" text-center text-light"
                                style="padding-top: 45px!important; padding-bottom: 70px!important;">Main</h5>
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