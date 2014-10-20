<!DOCTYPE html>
<html>
<head>
    <title>Seek City</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/main.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="css/whhg.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]> <script src="../../assets/js/html5shiv.js"></script> <script src="../../assets/js/respond.min.js"></script> <![endif]-->


    @yield('topscript')

  </head>
  <body>
    <body onload="initialize()">
    <!--autorization modal-->
      <a href="#" class="btn btn-danger btn-sm btm-zindex none" id="Show_cont">Show content</a>
    <div class="modal fade" id="autorization">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Authorization</h4>
                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" />
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" />
                                Check me out

                            </label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="1.html" class="btn btn-danger btn-sm">Sign in</a>
                    <a href="1.html" class="btn btn-primary btn-sm">Create account</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!--map-->

    <div id="map_canvas" class="map"></div>
    <!--/map-->

    @include('partials.navbar')

  <div class="row site">
        <div class="col-md-1 general_menu inner">
            <a href="#" class="avatar">
                <img src="#" alt="..."/></a>
        </div>

      @include('partials.session-messages')
      <!--Profile-->
        <span class="close_span" id="open_span"><a href="#" class="close-profile-link clooses" id="link_open">+</a></span>
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
                             <div id="map2" class="map_in_news"></div>
                        </div>
                        <div class="col-md-4 news_user_info">
                            <img src="#" alt="..."/><a href="#">Mattew An</a>Write a review:
                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s<i></i></span>
                        </div>
                    </div>
                    <!--/events-->
                    <!--events-->
                    <div class="row news_container">
                        <div class="col-md-8 news">
                            <span class="data">12.09.2013</span> You were at a Gala with <a href="#">Jane Doe</a>" at <a href="4.html">Black Ties and Champagne</a>"
                             <div id="map3" class="map_in_news"></div>
                        </div>
                        <div class="col-md-4 news_user_info">
                            <img src="#" alt="..."/><a href="#">Mattew An</a>Write a review:
                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s<i></i></span>
                        </div>
                    </div>
                    <!--/events-->
                </div>
            </div>
            <!--/my events-->
        </div>
        <!--/Profile-->

      @yield('content')
      <!--Content-->
            <!--header-->
            <div class="row">
                <div class="col-md-12 header">
                    <div class="logo">
                        <a href="start.html">
                            <img src="#" alt="..."/></a>
                    </div>

                </div>
            </div>
            <!--/header-->
             <!--Map open (for adaptive)-->
            <div class="row map_open">
                <div class="col-md-12">
                    <a href="#" id="map_open">Show map</a>
                </div>
            </div>
              <!--/Map open (for adaptive)-->
            
            <!--/Content-->

      @include('partials.footer')

</div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <!--Google maps API linl-->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCsbzuJDUEOoq-jS1HO-LUXW4qo0gW9FNs&sensor=false"></script>
    <!--Your map settings script-->
    <script type="text/javascript" src="js/map.js"></script>
    <!--jQuery-->
        <script type="text/javascript" src="js/jQueryv2.0.3.js"></script>
    <script type="text/javascript" src="js/pxgradient-1.0.2.jquery.js"></script>
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
    <script type="text/javascript" src="js/owl.carousel.js"></script>
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

</body>
</html>
    
    @yield('bottomscript')
    <!-- Google Analytics: todo change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>

  </body>
</html>
