<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    @yield('title')
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="{{ asset('/css/normalize.css'); }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css'); }}">
    <link rel="stylesheet" href="{{ asset('/css/jquery.datetimepicker.css');}}">
    <link rel="stylesheet" href="{{ asset('/css/main.css'); }}">
    <script src="{{ asset('/js/jquery-2.1.1.min.js'); }}"></script>
    @yield('top-script')
</head>
<body>
    @include('partials.navbar')

    <div id="content">
    @include('partials.session-messages')
    @yield('content')
    
    </div>
@include('partials.footer')
<script src="{{ asset('/js/modernizr.js'); }}"></script>
<script src="{{ asset('/js/fastclick.js'); }}"></script>
<script src="{{ asset('/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('/js/jquery.ui.touch-punch.min.js') }}"></script>
@yield('bottom-script')
</body>
</html>