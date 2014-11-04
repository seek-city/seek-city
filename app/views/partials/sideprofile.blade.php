Profile-->
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
                            <li>Liked: <a href="#" id="likedCount"></a></li>
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

        </div>
        <!--my events-->
        <div class="row">
            <div class="col-md-12 my_news">
                <div class="title_news">
                    <h2>You've Liked:</h2>
                </div>

            </div>
        </div>
        <!--/my events-->
    </div>
    <!--/Profile-->
    <script>
    var likedActivities;
    $(window).load(function(){
        $.ajax({
            url: "{{{ URL::route('activitiesLiked') }}}",
            type: "GET",
            data: {
                id: "{{{ Auth::id() }}}"
            },
            success: function(data) {
                if (data.success) {
                    likedActivities = data.likedActivities;
                    $("#likedCount").text(likedActivities.length);
                    for(var i = 0; i < likedActivities.length; i++) {
                        activity = likedActivities[i];
                        $('<div class="row news_container"><div class="col-md-8 news"><span class="data">' + activity[2] + '</span><a href="/activities/' + activity[0] + '">' + activity[1] + '</a></div>').appendTo($(".my_news"));
                    }
                }
            }
        });
    });
    </script>
@endif