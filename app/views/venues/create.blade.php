@extends('layouts.master')

@section('title')
Create a Venue
@stop

@section('content')
<div class="col-md-8 col-md-offset-2 well form-wrap">
    <h2>Create a Venue</h2>
    <hr>
    {{ Form::open(['action' => 'VenuesController@store', 'method' => 'POST', 'files' => true, 'class' => 'form']) }}

        @include('venues.form')

    <div class="form-group">
        {{ Form::reset('Reset', ['class' => 'btn btn-default']) }}
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    </div>

    {{ Form::close() }}
</div>
@stop

@section('bottom-script')
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCsbzuJDUEOoq-jS1HO-LUXW4qo0gW9FNs&amp;sensor=false"></script>
<script>
var mapOptions = {
    zoom: 9,
    center: new google.maps.LatLng(29.4814305, -98.5144044)
};

var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
var geocoder = new google.maps.Geocoder();
var address = '';
var city = '';
var state = '';
var zipcode = '';
var pin;
var markers = [];

function toggleBounce() {

  if (pin.getAnimation() != null) {
    pin.setAnimation(null);
  } else {
    pin.setAnimation(google.maps.Animation.BOUNCE);
  }
}

// Sets the map on all markers in the array.
function setAllMap(map) {
    for (var i = 0; i < markers.length; i++) {
        markers[i].setMap(map);
    }
}

// Removes the markers from the map, but keeps them in the array.
function clearMarkers() {
    setAllMap(null);
}

function deleteMarkers() {
    clearMarkers();
    markers = [];
}

$(".addressInputs").change(function() {
    $("#address").focusout(function() {
        address = $(this).val();
    });

    $("#city").on("focusout", function() {
        city = $(this).val();
    });

    $("#state").on("focusout", function() {
        state = $(this).val();
    });

    $("#zipcode").on("focusout", function() {
        zipcode = $(this).val();
    });

    mapAddress = address + ", " + city + ", " + state + ", " + zipcode;

    geocoder.geocode( { 'address': mapAddress }, function(results, status) {

        if (status == google.maps.GeocoderStatus.OK) {
            if (markers.length > 0) {
                deleteMarkers();
            }
            pin = new google.maps.Marker({
                position: results[0].geometry.location,
                map: map
            });
            markers.push(pin);
            google.maps.event.addListener(pin, 'click', toggleBounce);
        }
    });
});
</script>

@stop