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
    <!---navbar-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/activities">Seek City</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class='active'>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/">About Seek City</a>
                    </li>
                    <li>
                        <a href="/">User Profile</a>
                    </li>
                    <li>
                        <a href="/signup">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--nav bar end-->
    
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

        <!-- <div class="row site">
        <div class="col-md-1 general_menu inner">
            <a href="#" class="avatar">
                <img src="" alt=""/>#</a>
        </div> -->
      

      @yield('content')
      <!--Content-->
            <!--header-->
            <!-- <div class="row">
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
