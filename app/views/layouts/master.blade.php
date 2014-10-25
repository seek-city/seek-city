<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"    content="width=device-width, initial-scale=1, user-scalable=no">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="{{ asset('/css/normalize.css'); }}">
    
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css'); }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css'); }}">
   
    <script src="{{ asset('/js/modernizr.js'); }}"></script>
    <script src="{{ asset('/js/fastclick.js'); }}"></script>
    <script src="{{ asset('/js/btns.js'); }}"></script>
    <script src="{{ asset('/js/main.js'); }}"></script>
    @yield('top-script')
</head>
<body>
    @include('partials.navbar')
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

    <div id="content">
    @include('partials.session-messages')
    @yield('content')
    
    </div>
@include('partials.footer')
@yield('bottom-script')
</body>
</html>
