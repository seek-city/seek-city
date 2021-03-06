@extends('layouts.master')

@section('title')
<title>{{{ $activity->title }}}</title>
@stop

@section('top-script')
<link rel="stylesheet" href="{{ asset('/css/menu.css'); }}">
<style>
  .fb-share-button
{
transform: scale(1.5);
-ms-transform: scale(1.5);
-webkit-transform: scale(1.5);
-o-transform: scale(1.5);
-moz-transform: scale(1.5);
transform-origin: top left;
-ms-transform-origin: top left;
-webkit-transform-origin: top left;
-moz-transform-origin: top left;
-webkit-transform-origin: top left;
}
.twitter-share-button{
    margin-left:80px;
   transform: scale(1.5);
-ms-transform: scale(1.5);
-webkit-transform: scale(1.5);
-o-transform: scale(1.5);
-moz-transform: scale(1.5);
transform-origin: top left;
-ms-transform-origin: top left;
-webkit-transform-origin: top left;
-moz-transform-origin: top left;
-webkit-transform-origin: top left;
} 
}
  </style>
@stop

@section('content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1570407479849865&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="col-md-6 col-md-offset-3 well"> 

    <article> <!-- Activity -->
        <h1>{{{ $activity->title }}}</h1>

        <p class="lead">on {{ $activity->activity_date->format(Activity::DATE_FORMAT) }}</p>
        <p class="lead">located at {{ $activity->venue->address }},  {{ $activity->venue->city }}, {{ $activity->venue->state }}</p>

        @if (Auth::check())
            <!-- TO DELETE AN EVENT -->
            {{ Form::open(['method' => 'DELETE', 'action' => ['ActivitiesController@destroy', $activity->id], 'id' => 'delete-form']) }}
            <a class='btn btn-default' href="{{ action('ActivitiesController@edit', $activity->id) }}">Edit</a>
            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
            {{ Form::close() }}
            <hr>
            <!-- LIKE/UNLIKE -->
            <button class="unlike-btn btn btn-primary btn-xs hidden" data-activity-id="{{{ $activity->id }}}">Unlike</button>
            <button class="like-btn btn btn-primary btn-xs hidden" data-activity-id="{{{ $activity->id }}}">Like</button>
        @endif
        @if ($activity->offsetExists('image_path'))
        <img class="img-responsive" src="{{{ $activity->image_path }}}" alt="{{{ $activity->title }}}">
        @endif
        <hr>
        <p class="lead">{{{ $activity->body }}}</p>
        <p>Price: {{{ $activity->getPrice() }}}</p>
        <div class="fb-share-button" data-href="http://seekcity.dev"></div>
        <a class="twitter-share-button" href="https://twitter.com/share">Tweet</a><br>
         <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'seekcity';
        var disqus_identifier = 'act_' + {{ $activity->id }};

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    </article>
</div>

@stop

@section('bottom-script')
<script>
$.ajax({
    url: "{{{ URL::route('isLiked') }}}",
    type: 'GET',
    data: {
        id: "{{{ $activity->id }}}"
    },
    success: function(data) {
        if (data.success && data.isLiked) {
            $(".unlike-btn").removeClass('hidden');
        }
        else if (!data.isLiked) {
            $(".like-btn").removeClass('hidden');
        }
    }
});

$(document).ready(function() {
    $('#delete-form').submit(function(event) {
        if (!confirm('Are you sure you want to delete this?')) {
            event.preventDefault();
        };
    });

    var csrfToken = "{{{ Session::get('_token') }}}";

    $(".like-btn").click(function()
    {
        var activityId = $(this).data('activity-id');
        
        $.ajax({
            url: "{{{ URL::route('like') }}}",
            type:'POST',
            data: {
                _token: csrfToken,
                _method: 'POST',
                id: $(this).data('activity-id')
            },
            success: function(data) {
                if (data.success) {
                    $(".like-btn").addClass('hidden');
                    $(".unlike-btn").removeClass('hidden');
                }
            }
        });
    });

    $(".unlike-btn").click(function()
    {
        $.ajax({
            url: "{{{ URL::route('unlike') }}}",
            type: 'POST',
            data: {
                _token: csrfToken,
                _method: 'POST',
                id: $(this).data('activity-id')
            },
            success: function(data) {
                if (data.success) {
                    $(".unlike-btn").addClass('hidden');
                    $(".like-btn").removeClass('hidden');
                }
            }
        });
    });
});
</script>

<script type="text/javascript">
window.twttr=(function(d,s,id){var t,js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return}js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);return window.twttr||(t={_e:[],ready:function(f){t._e.push(f)}})}(document,"script","twitter-wjs"));
</script>
@stop
@include('partials.footer')
