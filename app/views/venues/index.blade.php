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
              <img src="" alt=""/></a> 
        </div>
        <!-- end side profile menubar -->

<!--Profile-->
@if (Auth::check())
      <span class="close_span tab" id="open_span"><a href="#" class="close-profile-link clooses" id="link_open">+</a></span>
        <div class="col-md-12 profile profile_closed" id="profile">
            <!--User info-->
            <div class="row">
                <div class="col-md-12">
                    <div class="user">
                        <img src="{{  Auth::user()->image_path }}" alt="..."/>
                        <div>
                            <h2>{{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}}</h2>
                            <ul>
                                <li>Visited <a href="#">59 places</a></li>
                                <li>Reviewed <a href="#">59 places</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="buttons">
                        {{ link_to_action('UsersController@getLogout', 'Log Out', null ,['class' => 'btn btn-danger btn-sm']); }}
                    </div>
                </div>
            </div>
            <!--/User info-->
            <div class="row">
                <!--latest tweet-->
                <div class="col-md-5 tweets">
                    <h2>Latest tweet</h2>
                    <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <i></i></span>
                    <div class="tweet_link"><a href="#">@ruthspina</a>22.12.2013   23:33</div>
                </div>
                <!--/latest tweet-->
            </div>
            <!--my events-->
            <div class="row">
                <div class="col-md-12 my_news">
                    <div class="title_news">
                        <h2>Event History</h2>
                    </div>
                    <!--news-->
                    <div class="row news_container">
                        <div class="col-md-8 news">
                            <span class="data">12.11.2013</span> You were at a meetup "<a href="#">Wine Down Thursday</a>"
                        </div>
                        <div class="col-md-8 news_user_info">
                            <img src="#" alt="..."/><a href="#">Ruth Spina</a>Write a review:
                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s<i></i></span>
                        </div>
                    </div>
                    <!--/events-->
                    <!--events-->
                    <div class="row news_container">
                        <div class="col-md-8 news">
                            <span class="data">12.09.2013</span> You were at a Gala with <a href="#">Jane Doe</a> at "<a href="#">Black Ties and Champagne</a>""
                        </div>
                        <div class="col-md-8 news_user_info">
                            <img src="#" alt="..."/><a href="#">Ruth Spina</a>Write a review:
                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s<i></i></span>
                        </div>
                    </div>
                    <!--/events-->
                </div>
            </div>
            <!--/my events-->
        </div>
        <!--/Profile-->
        @endif
        <!-- list of events -->
    <div class="row">
                        <div class="col-md-4  color">
                    <!--title-->
                    <div class="search_title">
                        {{ Form::open(array('action' => 'VenuesController@index', 'class' => 'form-inline search_form', 'role' => 'form', 'method' => 'GET')) }}
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
                        @forelse($venues as $venue)
                        <h3>{{{ $venue->name }}}</h3>
                            

                            <img class='img-responsive' src="{{{ $venue->image_url }}}" alt="">

                            <p>{{{ $venue->address }}}</p>
                            <p>{{{ $venue->city }}}</p>
                            <p>{{{ $venue->state }}}</p>
                            <p>{{{ $venue->zipcode }}}</p>
                            <p>{{{ $venue->phone_number }}}</p>
                            <p>{{{ $venue->parking_available}}}</p>
                            <p>{{{ $venue->open_hour }}}</p>
                            <p>{{{ $venue->close_hour }}}</p>
                            <p>{{{ $venue->website_url }}}</p>
                            <p>{{{ $venue->facebook_url }}}</p>
                            <p>{{{ $venue->google_url}}}</p>
                            <p>{{{ $venue->twitter_handle }}}</p>
                            
                            

                            <a class="btn btn-sm btn-primary" href="venues/{{{  $venue->id }}}">More Info <span class="glyphicon glyphicon-chevron-right"></span></a>

                        @empty
                            <p>No Entries match your search</p>
                        @endforelse
                    </article>
                    <br>
                    <hr>
                    
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
                zoom: 10,
                center: new google.maps.LatLng(29.4814305, -98.5144044)
            };
            
            var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
            var geocoder = new google.maps.Geocoder();
            var address = '';
            var m = 0;
            var obj;
            var x;
            
            
            markers = {{ $venues->toJson() }};
            for(obj = 0; obj < markers.data.length; obj++) {
                for(x = 0; x < this.data.length; x++){
                    address = markers.data[x].address + ", " + markers.data[x].city + ", " + markers.data[x].state + ", " + markers.data[x].zipcode;
                    geocoder.geocode( { 'address': address }, function(results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            markers.data[m].pin = new google.maps.Marker({
                                position: results[0].geometry.location,
                                map: map,
                                title: markers.data[m].title
                            });
                        }
                        
                        m++;
                    });
                }
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