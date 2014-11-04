@extends('layouts.master')
@include('partials.navbar')
@section ('top-script')
<link rel="stylesheet" href="{{ asset('/css/menu.css'); }}">
<link rel="stylesheet" href="{{ asset('/css/venue.css') }}">
@stop
@section('content')
<div class="col-md-6 col-md-offset-3 well"> 

    <article> <!-- Activity -->
        <h1>{{{ $venue->name }}}</h1>
        @if($venue->website_url)
        <a href="http://{{{ $venue->website_url }}}" id='venueWebsiteUrl'><i class="icon-globe"></i></a>
        @endif
        @if($venue->facebook_url)
        <a href="http://{{{ $venue->facebook_url }}}" id='venueFacebookUrl'><i class="icon-facebook"></i></a>
        @endif
        @if($venue->google_url)
        <a href="http://{{{ $venue->google_url }}}" id='venueGoogleUrl'><i class="icon-googleplus"></i></a>
        @endif
        <a href="http://{{{ $venue->twitter_handle }}}" id='venueTwitterHandle'><i class="icon-twitter"></i></a>
        @if (Auth::check())

        <!-- TO EDIT AN EVENT -->

        <!-- TO DELETE AN EVENT -->
        {{ Form::open(['method' => 'DELETE', 'action' => ['VenuesController@destroy', $venue->id], 'id' => 'delete-form']) }}
        <a class='btn btn-default' href="{{ action('VenuesController@edit', $venue->id) }}">Edit</a>
        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
        {{ Form::close() }}
        @endif 
        <hr>

        <img class="img-responsive" src="{{ $venue->image_url }}" alt="">
        <address>
            <p class="lead" id='venueAddress'>{{{ $venue->address }}}</p>
            <p class="lead" id='venueCity'>{{{ $venue->city }}}, {{{ $venue->state }}} {{{ $venue->zipcode }}}</p>
            <p class="lead" id='venueCity'>{{{ $venue->phone_number }}}</p>
        </address>
        <p class="lead" id='venueParkingAvailable'>Parking: {{{ $venue->getParking() }}}</p>
        <p class="lead" id='venueOpenHour'>Open: {{{ $venue->open_hour->format(Venue::TIME_FORMAT) }}}</p>
        <p class="lead" id='venueCloseHour'>Close: {{{ $venue->close_hour->format(Venue::TIME_FORMAT) }}}</p>

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