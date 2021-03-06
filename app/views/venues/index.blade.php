@extends('layouts.master')
@section('title')
<title>Venues</title>
@stop

@section('content')

<!--map-->
<div id="map_canvas" class="map"></div> 
<!--/map-->

<!-- side profile menubar -->
<div class="row site">
    <div class="col-md-1 general_menu inner">
        <a href="#" class="avatar">
            <img src="" alt=""/>
        </a> 
    </div>
    <!-- end side profile menubar -->
    @include('partials.sideprofile')
    <!-- list of venues -->
    <div class="row">
        <div class="col-md-4 color">
            <!--title-->
            <div class="search_title">
                {{ Form::open(array('action' => 'VenuesController@index', 'class' => 'form-inline search_form', 'role' => 'form', 'method' => 'GET')) }}
                    <div class="row">
                        <div class="form-group col-lg-6 col-md-offset-1">
                            {{ Form::text('search', Input::get('search'), array('class' => 'form-control', 'id' => 'search', 'placeholder' => 'Search Venues')) }}
                        </div>
                        {{ Form::submit('Search', array('class' => 'btn btn-danger')) }}
                    </div>
                {{ Form::close() }}
            </div>
            <article class="color">
                @forelse($venues as $venue)
                    <h3>{{{ $venue->name }}}</h3>
                    <img class='img-responsive' src="{{{ $venue->image_url }}}" alt="{{{ $venue->name }}}"><br>
                    <a class="btn btn-sm btn-primary" href="venues/{{{  $venue->id }}}">More Info <span class="glyphicon glyphicon-chevron-right"></span></a>
                    @forelse($venue->activities as $activity)
                        <a href="/activities/{{ $activity->id }}"><h6>{{ $activity->activity_date->format(Activity::SHORT_DATE_FORMAT) . ' - ' . $activity->title }}</h6></a>
                    @empty
                    @endforelse
                @empty
                    <p>No venues match your search.</p>
                @endforelse
            </article>
            <!--/result-->
            <!-- end list of venues -->
            {{  $venues->appends(Request::only(['search']))->links() }}
        </div>
    </div>
</div>
@stop

@section('bottom-script')
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCsbzuJDUEOoq-jS1HO-LUXW4qo0gW9FNs&amp;sensor=false"></script>
    <!--Script for worked left smile categories menu-->
    <script type="text/javascript">
    var markers;
        $(document).ready(function () {
                        "use strict";
            $(".inner ul li a").each(function (i) {
                $(".inner ul li a:eq(" + i + ")").click(function () {
                    var tab_id = i + 1;
                    $(".inner ul li a").removeClass("active");
                    $("#tabs .active").removeClass("active");
                    $(this).addClass("active");
                    $("#tabs div").stop(false, false).hide();
                    $("#tab" + tab_id).stop(false, false).show();
                    return false;
                });
            });
            
            $("#tabs_point li a").each(function (i) {
                $("#tabs_point li a:eq(" + i + ")").click(function () {
                    var tab_id = i + 1;
                    $("#tabs_point li a").removeClass("active");
                    $(".tabs_block_point .active").removeClass("active");
                    $(this).addClass("active");
                    $(".tabs_block_point div").stop(false, false).hide();
                    $("#point_tab" + tab_id).stop(false, false).show();
                    return false;
                });
            });
            
            $('#link_open').on('click', function () {
                if ($('#link_open').hasClass("clooses")) {
                    $("#open_span").removeClass("close_span").addClass("open_span");
                    $("#profile").removeClass("profile_closed");
                    $("#link_open").removeClass("clooses");
                    $("#cont").addClass("none");
                }
                else {
                    $("#open_span").addClass("close_span").removeClass("open_span");
                    $("#profile").addClass("profile_closed");
                    $("#link_open").addClass("clooses");
                    $("#cont").removeClass("none");
                }
            });
            $('#map_open').on('click', function () {
                            "use strict";
                $("#cont").addClass("none");
                $("#Show_cont").removeClass("none");
            });
            $('#Show_cont').on('click', function () {
                        "use strict";
                $("#cont").removeClass("none");
            });
            
            var mapOptions = {
                zoom: 10,
                center: new google.maps.LatLng(29.4814305, -98.5144044)
            };
            
            var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
            var geocoder = new google.maps.Geocoder();
            var address = '';
            var m = 0;
            var x;
            
            
            markers = {{ $venues->toJson() }};
            for(x = 0; x < markers.data.length; x++){
                address = markers.data[x].address + ", " + markers.data[x].city + ", " + markers.data[x].state + ", " + markers.data[x].zipcode;
                geocoder.geocode( { 'address': address }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        markers.data[m].pin = new google.maps.Marker({
                            position: results[0].geometry.location,
                            map: map,
                            title: markers.data[m].name
                        });
                    }
                    
                    m++;
                });
            }
        });

    // Script for worked profile page
    // Script for gradient icon in general menu
        $(function () {
                        "use strict";
            $(".gradientmenu").pxgradient({
                step: 10,
                colors: ["#fdfeff", "#cfeefa"],
                dir: "y"
            });
        });
    // Preloader 
    //-------------------------------------------------------------------------------

    $(window).load(function(){

        $('#status').fadeOut(); 
        $('#preloader').delay(350).fadeOut('slow');
        $('body').delay(350).css({'overflow':'visible'});

        $('.event-info-bg-left').addClass('animated fadeInLeftBig delay1');
        $('.event-info-bg-right').addClass('animated fadeInRightBig delay1');
        $('.event-info').addClass('animated fadeIn delay2');

        $('img.img-fade').hide();

        function anim() {

            var fadeSpeed   = 1500; // = 1.5 sec
            var displayTime = 6000; // = 8 sec

            $("#header-bg-fade img.img-fade").first().appendTo('#header-bg-fade').fadeOut(fadeSpeed);
            $("#header-bg-fade img").first().fadeIn(fadeSpeed);
            setTimeout(anim, displayTime);
        }

        anim();
    });
    </script>

@stop