@extends('layouts.master')

@section('title')
Activities
@stop

@section('top-script')
<link href="{{ asset('/css/calendar.css'); }}"
@stop

@section('content')

<div class="row site">
        <div class="col-md-1 general_menu inner">
            <a href="#" class="avatar">
                <img src="" alt=""/>#</a>
        </div>
        <!-- end side profile menubar -->

<!--Profile-->
      <span class="close_span tab" id="open_span"><a href="#" class="close-profile-link clooses" id="link_open">+</a></span>
        <div class="col-md-12 profile profile_closed" id="profile">
            <!--User info-->
            <div class="row">
                <div class="col-md-12">
                    <div class="user">
                        <img src="#" alt="..."/>
                        <div>
                            <h2>Jane Doe</h2>
                            <ul>
                                <li>Visited <a href="#">59 places</a></li>
                                <li>Reviewed<a href="#">59 places</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="buttons">
                        <a href="#" class="btn btn-dark btn-sm"><i class="icon-emailalt"></i><span>1</span></a><a href="#" class="btn btn-danger btn-sm">Sign out</a>
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
                        <h2>My Events</h2>
                    </div>
                    <!--news-->
                    <div class="row news_container">
                        <div class="col-md-8 news">
                            <span class="data">12.11.2013</span> You were at a meetup "<a href="4.html">Wine Down Thursday</a>"
                        </div>
                        <div class="col-md-4 news_user_info">
                            <img src="#" alt="..."/><a href="#">George Washington</a>Write a review:
                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s<i></i></span>
                        </div>
                    </div>
                    <!--/events-->
                    <!--events-->
                    <div class="row news_container">
                        <div class="col-md-8 news">
                            <span class="data">12.09.2013</span> You were at a Gala with <a href="#">Jane Doe</a>" at <a href="4.html">Black Ties and Champagne</a>"
                        </div>
                        <div class="col-md-4 news_user_info">
                            <img src="#" alt="..."/><a href="#">Bob Dole</a>Write a review:
                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s<i></i></span>
                        </div>
                    </div>
                    <!--/events-->
                </div>
            </div>
            <!--/my events-->
        </div>
        <!--/Profile-->
        <!-- list of events -->
    <div class="row">
                        <div class="col-md-4  color">
                    <!--title-->
                    <div class="search_title">
                        <form class="form-inline search_form" role="form">
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-offset-1">
                                    <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Search Events" />
                                </div>
                                <button type="submit" class="btn btn-danger">Search</button>
                                <button type="submit" class="btn btn-danger">Sort</button>
                            </div>
                        </form>
                    </div>
                    <article class="color"> 
                        @forelse($activities as $activity)
                    <h3>{{{ $activity->title }}}</h3>

                     <p><span class='glyphicon glyphicon-time'></span> {{{ $activity->updated_at->format(Activity::DATE_FORMAT) }}} </p>

                    <img class='img-responsive' src="{{ $activity->img }}" alt="">

                    <p>{{{ $activity->body }}}</p>

                    <a class="btn btn-sm btn-primary" href="activities/{{ $activity->id }}">More Info <span class="glyphicon glyphicon-chevron-right"></span></a>

                     @empty
                      <p>No Entries match your search</p>
                    @endforelse
                    </article>
                    <br>
                    <hr>
                    <p>No More Results</p>
                    <hr>
                    <!--/result-->
                    <!-- end list of events -->
                  </div>
            </div>
    <hr>
    <!--map-->
    <div id="calendar" class="col-md-8 col-md-offset-2 calendarWrap">{{ $cal->generate() }}</div>
    <!--/map-->
</div>
@stop

@section('bottom-script')
    <!--Script for worked left smile categoryes menu-->
    <script type="text/javascript">
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
                })
            })
        })
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
                        "use strict";
            $("#tabs_point li a").each(function (i) {
                $("#tabs_point li a:eq(" + i + ")").click(function () {
                    var tab_id = i + 1;
                    $("#tabs_point li a").removeClass("active");
                    $(".tabs_block_point .active").removeClass("active");
                    $(this).addClass("active");
                    $(".tabs_block_point div").stop(false, false).hide();
                    $("#point_tab" + tab_id).stop(false, false).show();
                    return false;
                })
            })
        })
    </script>
    <!--/Script for worked left smile categoryes menu-->
    <!--Script for worked profile page-->
    <script type="text/javascript" src="/js/owl.carousel.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
                        "use strict";
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
            })
              $('#map_open').on('click', function () {
                            "use strict";
            $("#cont").addClass("none");
            $("#Show_cont").removeClass("none");

        })
        $('#Show_cont').on('click', function () {
                        "use strict";
            $("#cont").removeClass("none");
        })
        });
    </script>
    <script type="text/javascript">
        $(function () {
                        "use strict";
            $("#owl-demo, #myguest").owlCarousel({
                items: 6,
                itemsDesktop: [1000, 5],
                itemsDesktopSmall: [900, 6],
                itemsTablet: [600, 2],
                itemsMobile: false
            });

        });
    </script>
    <!--/Script for worked profile page-->
    <!--Script for gradient icon in general menu-->
    <script type="text/javascript">
        $(function () {
                        "use strict";
            $(".gradientmenu").pxgradient({
                step: 10,
                colors: ["#fdfeff", "#cfeefa"],
                dir: "y"
            });
        });
    </script>
    <script>
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