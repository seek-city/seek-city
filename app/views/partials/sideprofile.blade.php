<!--Profile-->
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
                            <li>Visited <a href="#">59 places</a></li>
                            <li>Reviewed <a href="#">59 places</a></li>
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
                    <h2>Event History</h2>
                </div>
                <!--news-->
                <div class="row news_container">
                    <div class="col-md-8 news">
                        <span class="data">12.11.2013</span> You were at a meetup "<a href="#">Wine Down Thursday</a>"
                    </div>
                    <div class="col-md-8 news_user_info">
                        <img src="#" alt="..."/><a href="#">Ruth Spina</a>Write a review:
                        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s<i></i></span>
                    </div>
                </div>
                <!--/events-->
                <!--events-->
                <div class="row news_container">
                    <div class="col-md-8 news">
                        <span class="data">12.09.2013</span> You were at a Gala with <a href="#">Jane Doe</a> at "<a href="#">Black Ties and Champagne</a>""
                    </div>
                    <div class="col-md-8 news_user_info">
                        <img src="#" alt="..."/><a href="#">Ruth Spina</a>Write a review:
                        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s<i></i></span>
                    </div>
                </div>
                <!--/events-->
            </div>
        </div>
        <!--/my events-->
    </div>
    <!--/Profile-->
@endif