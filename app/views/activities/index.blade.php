@extends('layouts.master')
@section('title')
<title>Activities</title>
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
    <!-- list of events -->
    <div class="row">
        <div class="col-md-4  color">
            <!--title-->
            <div class="search_title">
                {{ Form::open(array('action' => 'ActivitiesController@index', 'class' => 'form-inline search_form', 'role' => 'form', 'method' => 'GET')) }}
                    <div class="row">
                        <div class="form-group col-lg-6 col-md-offset-1">
                            {{ Form::text('search', Input::get('search'), array('class' => 'form-control', 'id' => 'exampleInputEmail2', 'placeholder' => 'Search Events')) }}
                        </div>
                        {{ Form::submit('Search', array('class' => 'btn btn-danger')) }}
                        <button type="submit" class="btn btn-danger">Sort</button>
                    </div>
                {{ Form::close() }}
            </div>
            <article class="color">
                @forelse($activities as $activity)
                <h3>{{{ $activity->title }}}</h3>
                    <p><span class='glyphicon glyphicon-time'></span> {{{ $activity->activity_date->format(Activity::DATE_FORMAT) }}} </p>
                    <p>{{ $activity->venue->address }} {{ $activity->venue->city }},{{ $activity->venue->state }}</p>

                    <img class='img-responsive' src="{{{ $activity->image_path }}}" alt="">

                    <p>{{{ str_limit($activity->body, $limit = 100, $end = '...') }}}</p>
                    
                    <a class="btn btn-sm btn-primary" href="activities/{{{  $activity->id }}}">More Info <span class="glyphicon glyphicon-chevron-right"></span></a>

                @empty
                    <p>No Entries match your search</p>
                @endforelse
            </article>
            <br>
            <hr>
            {{ $activities->appends(Request::only(['category','mood','search']))->links() }}
            <hr>
            <!--/result-->
            <!-- end list of events -->
        </div>
    </div>
    <hr>
</div>

@stop

@section('bottom-script')
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCsbzuJDUEOoq-jS1HO-LUXW4qo0gW9FNs&amp;sensor=false"></script>
    <!--Script for worked left smile categoryes menu-->
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
                zoom: 13,
                center: new google.maps.LatLng(29.4211404,-98.5129409)
            };
            
            var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
            var geocoder = new google.maps.Geocoder();
            var address = '';
            var m = 0;
            var obj;
            var x;
            

            // Populate array of markers/venues for each activity
            markers = [
                @foreach ($activities as $activity)
                    {{ $activity->venue->toJson() }},
                @endforeach
            ];
            
            console.log(markers);

            for(obj = 0; obj < markers.length; obj++) {
                address = markers[obj].address + ", " + markers[obj].city + ", " + markers[obj].state + ", " + markers[obj].zipcode;
                geocoder.geocode( { 'address': address }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        markers[m].pin = new google.maps.Marker({
                            position: results[0].geometry.location,
                            map: map,
                            animation: google.maps.Animation.DROP
                            // title: markers[obj].name
                        }); // end marker block
                    } // end if
                }); // end geocode
            } // end for
            
        });  // end document ready



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
