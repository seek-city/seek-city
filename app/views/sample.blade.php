<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"    content="width=device-width, initial-scale=1, user-scalable=no">

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/menu.css">
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">

        <script src="js/modernizr.js"></script>
        <script src="js/fastclick.js"></script>
        <script src="js/btns.js"></script>
        <script src="js/main.js"></script>
        <style>
        body{
        background-color: #70A8B1;
        }
        </style>
    </head>
    <body>
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
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 550">

<defs>
<g id="loney">
    <circle r="5%" fill-opacity="0" >
        <animate id="one" attributeName="fill-opacity" values="0; .1; .2; .25" begin="1s; repeat.click" dur=".5s" calcMode="discrete" fill="freeze"/>
    </circle>
    <circle r="10%" fill-opacity="0" >
        <animate id="two" attributeName="fill-opacity" values="0; .1; .2; .25" begin="one.end+0.2s" dur=".5s" calcMode="discrete" fill="freeze"/>
        <animate id="radiussix" attributeName="r" values="10%; 0%" begin="radiusfive.end+0.1s" dur=".5s" calcMode="discrete" fill="freeze"/>
    </circle>
    <circle r="15%" fill-opacity="0" >
        <animate id="three" attributeName="fill-opacity" values="0; .1; .2; .25" begin="two.end+0.2s" dur=".5s" calcMode="discrete" fill="freeze"/>
        <animate id="radiusfive" attributeName="r" values="15%; 5%; 0%" begin="radiusfour.end+0.1s" dur=".5s" calcMode="discrete" fill="freeze"/>
    </circle>
    <circle r="20%" fill-opacity="0" >
        <animate id="four" attributeName="fill-opacity" values="0; .1; .2; .25" begin="three.end+0.2s" dur=".5s" calcMode="discrete" fill="freeze"/>
        <animate id="radiusfour" attributeName="r" values="20%; 10%; 0%" begin="radiusthree.end+0.1s" dur=".5s" calcMode="discrete" fill="freeze"/>
    </circle>
    <circle r="25%" fill-opacity="0" >
        <animate id="five" attributeName="fill-opacity" values="0; .1; .2; .25" begin="four.end+0.2s" dur=".5s" calcMode="discrete" fill="freeze"/>
        <animate id="radiusthree" attributeName="r" values="25%; 15%; 5%; 0%" begin="radiustwo.end+0.1s" dur=".5s" calcMode="discrete" fill="freeze"/>
    </circle>
    <circle r="30%" fill-opacity="0" >
        <animate id="six" attributeName="fill-opacity" values="0; .1; .2; .25" begin="five.end+0.2s" dur=".5s" calcMode="discrete" fill="freeze"/>
        <animate id="radiustwo" attributeName="r" values="30%; 20%; 10%; 0%" begin="radiusone.end+0.1s" dur=".5s" calcMode="discrete" fill="freeze"/>
    </circle>
    <circle r="35%" fill-opacity="0" >
        <animate id="seven" attributeName="fill-opacity" values="0; .1; .2; .25" begin="six.end+0.2s" dur=".5s" calcMode="discrete" fill="freeze"/>
        <animate id="radiusone" attributeName="r" values="35%; 25%; 15%; 5%; 0%" begin="seven.end+0.1s; repeat.click+4.7s" dur=".5s" calcMode="discrete" fill="freeze"/>
    </circle>
</g>
</defs>

<g id="repeat" cursor="pointer">
    <use xlink:href="#loney" x="0%" y="0%" fill="crimson">
     <animate attributeName="x" values="0%; 50%" begin="radiussix.end+0.2s" dur="1.5s" fill="freeze"/>
     <animate attributeName="y" values="0%; 50%" begin="radiussix.end+0.2s" dur="1.5s" fill="freeze"/>
    </use>
    <use xlink:href="#loney" x="50%" y="0%" fill="gold">
     <animate attributeName="y" values="0%; 50%" begin="radiussix.end+0.2s" dur="1.5s" fill="freeze"/>
    </use>
    <use xlink:href="#loney" x="100%" y="0%" fill="salmon">
     <animate attributeName="x" values="100%; 50%" begin="radiussix.end+0.2s" dur="1.5s" fill="freeze"/>
     <animate attributeName="y" values="0%; 50%" begin="radiussix.end+0.2s" dur="1.5s" fill="freeze"/>
    </use>
    <use xlink:href="#loney" x="50%" y="50%" fill="navajowhite"/>
    <use xlink:href="#loney" x="100%" y="100%" fill="teal">
     <animate attributeName="x" values="100%; 50%" begin="radiussix.end+0.2s" dur="1.5s" fill="freeze"/>
     <animate attributeName="y" values="100%; 50%" begin="radiussix.end+0.2s" dur="1.5s" fill="freeze"/>
    </use>
    <use xlink:href="#loney" x="50%" y="100%" fill="thistle">
     <animate attributeName="y" values="100%; 50%" begin="radiussix.end+0.2s" dur="1.5s" fill="freeze"/>
    </use>
    <use xlink:href="#loney" x="0%" y="50%" fill="tomato">
     <animate attributeName="x" values="0%; 50%" begin="radiussix.end+0.2s" dur="1.5s" fill="freeze"/>
    </use>
    <use xlink:href="#loney" x="100%" y="50%" fill="violet">
     <animate attributeName="x" values="100%; 50%" begin="radiussix.end+0.2s" dur="1.5s" fill="freeze"/>
    </use>
    <use xlink:href="#loney" x="0%" y="100%" fill="seagreen">
     <animate attributeName="x" values="0%; 50%" begin="radiussix.end+0.2s" dur="1.5s" fill="freeze"/>
     <animate id="finish" attributeName="y" values="100%; 50%" begin="radiussix.end+0.2s" dur="1.5s" fill="freeze"/>
</g>



</use>

</svg>

        <main id="main" class="main"></main>

<!--footer-->
<nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
  <div class="container">
   <div class="row">
    <div class="col-md-2 col-md-offset-5">
 <!--  <i class="fa fa-search fa-4x"></i>  -->
</div>
  </div>
</div>
</nav>
<!--end of footer-->
</body>
</html>
