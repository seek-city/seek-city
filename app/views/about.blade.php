<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> <!-- Its not valid html but it works -->
        <!-- Le styles -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="css/flexslider.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/aboutpg.css" rel="stylesheet">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
        <!--[if gte IE 9]>
        <style type="text/css">
            .gradient { filter: none; }
        </style>
        <![endif]-->
        <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
    </head>
    <body>
      <!--navbar-->
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
                    {{ link_to_action('HomeController@index', 'Home'); }}
                </li>
                <li>
                    {{ link_to_action('HomeController@about', 'About'); }}
                </li>
                @if (Auth::check())
                <li>
                    {{ link_to_action('ActivitiesController@create', 'New Activity'); }}
                </li>
                <li>
                    {{ link_to_action('UsersController@getLogout', 'Log Out'); }}
                </li>
                <li>
                    <a href="/categories/manage">Manage Categories</a>
                </li>
                <li>
                    <a href="/moods/manage">Manage Moods</a>
                </li>
                @else
                <li>
                    {{ link_to_action('UsersController@getCreate', 'Sign Up') }}
                </li>
                <li>
                    {{ link_to_action('UsersController@getLogin', 'Log In'); }}
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<!-- /.navbar -->
        <div class="panel"> <!--Panels for content -->
            <div class="album"> <!-- Album panel -->
                <span class="closeicon"><i class="icon-remove"></i></span>
                <span class="closeicon"><i class="icon-remove"></i></span>
                <div class="row">
                    <div  class="col-xs-12 col-sm-8 col-md-8 col-lg-8 hidden-xs">
                      <div class="well imagebg-4 fixed-height"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                      <div class="well imagebg-5 fixed-height"></div>
                    </div>
                </div>
                <div class="row">
                    <div  class="col-xs-12 col-sm-4 col-md-4 col-lg-4 hidden-xs">
                      <div class="well imagebg-6 fixed-height"></div>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                      <div class="well imagebg-7 fixed-height"></div>
                    </div>
                </div>
                <div class="row">
                    <div  class="col-xs-12 col-sm-8 col-md-8 col-lg-8 hidden-xs">
                      <div class="well imagebg-8 fixed-height"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                      <div class="well imagebg-9 fixed-height"></div>
                    </div>
                </div>
                <div class="row">
                    <div  class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                      <div class="well imagebg-10 fixed-height"></div>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 hidden-xs">
                      <div class="well imagebg-11 fixed-height"></div>
                    </div>
                </div>
                <div class="row">
                    <div  class="col-xs-12 col-sm-8 col-md-8 col-lg-8 hidden-xs">
                      <div class="well imagebg-12 fixed-height"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                      <div class="well imagebg-13 fixed-height"></div>
                    </div>
                </div>
            </div>
            <div class="work"> <!-- Work panel -->
                <span class="closeicon"><i class="icon-remove"></i></span>
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 hidden-xs">
                      <div class="well imagebg-3 fixed-height"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                      <div class="well purple fixed-height">

                      </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div class="well plum fluid-height overflow-show">

                      </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="container-narrow">
          <div class="">
        </div>
 
          <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 hidden-xs">
            
                </div>
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                    <div class="aboutLogo">
                        <img src="img/logo_update5.png" alt="" />
                      </div>
                </div>
                <div class="row"></div> 
          <div class="row">
              <div class="col-xs-12 col-lg-12" id="home"> <!-- Overflow-show is used when .outer-box is used for example since it enables it to show outside the div -->
                <div class="well sage overflow-show large"> 
                    <h1>Home</h1>
                    <div class="outer-box">
                        <p>
                                <span class="bold">Seek City </span>is an activity discovery platform where <span class="bold">Search</span> by suggestion reigns. Whether at work, home, or on the go <span class="bold">Seek City</span> can search for things to do by mood, category or price<br>from where you are or where you want to be.
                            </p>
                    </div>
                </div> 
              </div>
                <h2>About the Team</h2>
          <div class="aboutJosh">
            <img class="el-img" src="img/josh.png" />
   
        <span class="maincaption">
                <span class="char1"> </span>
                <span class="char2">J</span>
                <span class="char3">o</span>
                <span class="char4">s</span>
                <span class="char5">h</span>
                <span class="char6">.</span>
                <span class="char7">M</span>
                <span class="char8">a</span>
                <span class="char9">y</span>
                <span class="char10">s</span>
                <span class="char11">.</span>
                <span class="char12"> </span>
                <span class="char13">W</span>
                <span class="char14">e</span>
                <span class="char15">b</span>
                <span class="char16">.</span>
                <span class="char17">D</span>
                <span class="char18">e</span>
                <span class="char19">v</span>
                <span class="char20">e</span>
                <span class="char21">l</span>
                <span class="char22">o</span>
                <span class="char23">p</span>
                <span class="char24">e</span>
                <span class="char25">r</span>
              </span>
            </div>
            
            <div class="aboutRuth">
            <a href="http://www.linkedin.com/in/ruthspina/"><img class="el-img" src="img/ruth.png"/></a>
        <span class="maincaption">
                <span class="char1"> </span>
                <span class="char2">R</span>
                <span class="char3">u</span>
                <span class="char4">t</span>
                <span class="char5">h</span>
                <span class="char6">.</span>
                <span class="char7">S</span>
                <span class="char8">p</span>
                <span class="char9">i</span>
                <span class="char10">n</span>
                <span class="char11">a</span>
                <span class="char12">.</span>
                <span class="char13">W</span>
                <span class="char14">e</span>
                <span class="char15">b</span>
                <span class="char16">.</span>
                <span class="char17">D</span>
                <span class="char18">e</span>
                <span class="char19">v</span>
                <span class="char20">e</span>
                <span class="char21">l</span>
                <span class="char22">o</span>
                <span class="char23">p</span>
                <span class="char24">e</span>
                <span class="char25">r</span>
              </span>
            </div>
            <div class="aboutPhil">
              <img class="el-img" src="img/phil.png"/>
        <span class="maincaption">
                <span class="char1"> </span>
                <span class="char2">P</span>
                <span class="char3">h</span>
                <span class="char4">i</span>
                <span class="char5">l</span>
                <span class="char6">.</span>
                <span class="char7">W</span>
                <span class="char8">i</span>
                <span class="char9">n</span>
                <span class="char10">r</span>
                <span class="char11">o</span>
                <span class="char12">c</span>
                <span class="char13">k</span>
                <span class="char14">.</span>
                <span class="char15">W</span>
                <span class="char16">e</span>
                <span class="char17">b</span>
                <span class="char18">.</span>
                <span class="char19">D</span>
                <span class="char20">e</span>
                <span class="char21">v</span>
                <span class="char22">e</span>
                <span class="char23">l</span>
                <span class="char24">o</span>
                <span class="char25">p</span>
                <span class="char26">e</span>
                <span class="char27">r</span>
              </span>
            </div>
          

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="js/jquery.flexslider-min.js"></script>
        <script src="js/jquery.smooth-scroll.min.js"></script>
        <script src="js/jquery.backstretch.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/aboutpg.js" type="text/javascript"></script>
        <script>
        $(document).ready(function(){
    $("body").addClass("loaded");
    $("li a .caption, .maincaption").lettering();
    $("li a").hover(function(){
        $(".cover").addClass("fadeout");
        // $(this).parent().removeClass("fadeout");
    }, function(){
        $(".cover").removeClass("fadeout");
    });
});
        </script>

</body>
</html>
