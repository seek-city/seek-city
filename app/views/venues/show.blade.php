@extends('layouts.master')
@include('partials.navbar')
@section ('top-script')
<link rel="stylesheet" href="{{ asset('/css/menu.css'); }}">
<link rel="stylesheet" href="{{ asset('/css/venue.css') }}">
@stop
@section('content')
<div class="col-md-6 well"> 

    <article> <!-- Activity -->
        <h1>{{{ $venue->name }}}</h1>

        <p class="lead"id='activitieDate'>by on {{ $venue->updated_at }}</p>

        @if (Auth::check())
        @endif 
        <!-- TO EDIT AN EVENT -->

        <!-- TO DELETE AN EVENT -->
        {{ Form::open(['method' => 'DELETE', 'action' => ['VenuesController@destroy', $venue->id], 'id' => 'delete-form']) }}
        <a class='btn btn-default' href="{{ action('VenuesController@edit', $venue->id) }}">Edit</a>
        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
        {{ Form::close() }}
        <hr>

        <img class="img-responsive" src="{{ $venue->image_path }}" alt="">
        <hr>
        <p class="lead" id='venueName'>{{{ $venue->name }}}</p>
        <p class="lead" id='venueAddress'>{{{ $venue->address }}}</p>
        <p class="lead" id='venueCity'>{{{ $venue->city }}}</p>
        <p class="lead" id='venueState'>{{{ $venue->state }}}</p>
        <p class="lead" id='venueZipCode'>{{{ $venue->zipcode }}}</p>
        <p class="lead" id='venueCity'>{{{ $venue->phone_number }}}</p>
        <p class="lead" id='venueParkingAvailable'>{{{ $venue->parking_available }}}</p>
        <p class="lead" id='venueOpenHour'>{{{ $venue->open_hour }}}</p>
        <p class="lead" id='venueCloseHour'>{{{ $venue->close_hour}}}</p>
        <p class="lead" id='venueWebsiteUrl'>{{{$venue->website_url}}}</p>
        <p class="lead" id='venueFacebookUrl'>{{{ $venue->facebook_url}}}</p>
        <p class="lead" id='venueGoogleUrl'>{{{ $venue->google_url }}}</p>
        <p class="lead" id='venueTwitterHandle'>{{{ $venue->twitter_handle }}}</p>
        <div id="disqus_thread"></div>
        <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
            var disqus_shortname = 'seekcity';
            var disqus_identifier = 'venue_' + {{{ $venue->id }}};

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
$('#delete-form').submit(function(event) {
    if (!confirm('Are you sure you want to delete this?')) {
        event.preventDefault();
    };
});
</script>
@stop
@include('partials.footer')
<script src="{{ asset('/js/maps.js'); }}"></script>
@stop