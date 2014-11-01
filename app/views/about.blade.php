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
                    <div class="well fixed-height imagebg-1"> <!-- imagebg-1 is using css for the fullscreen background -->

                    </div>
                </div>
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                    <div class="well-slider darksage">
                        <div id="content" class="flexslider">
                            <ul class="slides darksage">
                                <li>
                                    <div class="content-slider padding">
                                        <h2>Plan</h2>
                                        <p>With Seek City you can easily search by Mood, Category, or Price</p>
                                    </div>
                                    <div class="image-slider">
                                        <img src="img/edit.png" alt="" />
                                    </div>
                                </li>
                                <li>
                                    <div class="content-slider padding">
                                        <h2>Search</h2>
                                        <p>Search for activities from where you are, or where you would like to be.</p>
                                    </div>
                                    <div class="image-slider">
                                        <img src="img/cog.png" alt="" />
                                    </div>
                                </li>
                                <li>
                                    <div class="content-slider padding">
                                        <h2>Share</h2>
                                        <p>Share your findings with friends to spread the news or to make it a group outing.</p>
                                    </div>
                                    <div class="image-slider">
                                        <img src="img/people.png" alt="" />
                                    </div>
                                </li>
                            </ul>
                        </div>
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
          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 click" id="portfolio"> <!-- using .click because its clickable #portfolio is a trigger all changable in the script.js file, no padding lets the portfolio-img be full div -->
              <div class="well no-padding">
                  <div class="portfolio-img one"> <!-- uses backstretch.js for full div effect, changable in script.js -->
                      <div class="hover-effect effect-one">
                          <p class="text-center">
                              Josh Mays
                          </p>
                      </div>
                  </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 click" id="portfolio2">
              <div class="well no-padding">
                  <div class="portfolio-img two">
                      <div class="hover-effect effect-two">
                          <p class="text-center">
                              Ruth Spina
                          </p>
                      </div>
                  </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 click" id="portfolio3">
                <div class="well no-padding">
                  <div class="portfolio-img three">
                      <div class="hover-effect effect-three">
                          <p class="text-center">
                              Phil Winrock
                          </p>
                      </div>
                  </div>
                </div>
            </div>
          </div>
          

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="js/jquery.flexslider-min.js"></script>
        <script src="js/jquery.smooth-scroll.min.js"></script>
        <script src="js/jquery.backstretch.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/aboutpg.js" type="text/javascript"></script>

</body>
</html>
