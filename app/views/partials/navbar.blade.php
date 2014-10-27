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
                    <a href="/">About Seek City</a>
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