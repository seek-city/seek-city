@extends('layouts.master')
 @include('partials.navbar')
@section ('top-script')
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
        <p class="lead"id='venueName'>{{{ $venue->name }}}</p>
        <p class="lead"id='venueAddress'>{{{ $venue->address }}}</p>
        <p class="lead"id='venueCity'>{{{ $venue->city }}}</p>
        <p class="lead"id='venueState'>{{{ $venue->state }}}</p>
        <p class="lead"id='venueZipCode'>{{{ $venue->zipcode }}}</p>
        <p class="lead"id='venueCity'>{{{ $venue->phone_number }}}</p>
        <p class="lead"id='venueParkingAvailable'>{{{ $venue->parking_available }}}</p>
        <p class="lead"id='venueOpenHour'>{{{ $venue->open_hour }}}</p>
        <p class="lead"id='venueCloseHour'>{{{ $venue->close_hour}}}</p>
        <p class="lead"id='venueWebsiteUrl'>{{{$venue->website_url}}}</p>
        <p class="lead"id='venueFacebookUrl'>{{{ $venue->facebook_url}}}</p>
        <p class="lead"id='venueGoogleUrl'>{{{ $venue->google_url }}}</p>
        <p class="lead"id='venueTwitterHandle'>{{{ $venue->twitter_handle }}}</p>
        
    </article>
        </div>
    </div>
</div> <!-- end col-md-6 -->
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