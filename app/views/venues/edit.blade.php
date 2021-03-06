@extends('layouts.master')

@section('title')
Edit Venue
@stop

@section('content')
<div class='col-md-8 col-md-offset-2 well form-wrap'>
    <h2>Edit Venue</h2>
    <hr>
{{ Form::model($venue, ['action' => ['VenuesController@update', $venue->id], 'method' => 'PUT', 'files' => true]) }}

    @include('venues.form')
    
    <div class="form-group">
        {{ Form::reset('Reset', ['class' => 'btn btn-default']) }}
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    </div>

{{ Form::close() }}
@stop

@section('bottom-script')
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCsbzuJDUEOoq-jS1HO-LUXW4qo0gW9FNs&amp;sensor=false"></script>
<script>
var mapOptions = {
    zoom: 10,
    center: new google.maps.LatLng(29.4814305, -98.5144044)
};

var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
var geocoder = new google.maps.Geocoder();
var address = $("#address").val();
var city = $("#city").val();
var state = $("#state").val();
var zipcode = $("#zipcode").val();
var mapAddress = address + ", " + city + ", " + state + ", " + zipcode;

var markers = [];

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

geocoder.geocode( { 'address': mapAddress }, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
        pin = new google.maps.Marker({
            position: results[0].geometry.location,
            map: map
        });
        markers.push(pin);
    }
});

$(".addressInputs").change(function() {
    $("#address").focusout(function() {
        address = $(this).val();
        console.log(address);
    });
    
    $("#city").on("focusout", function() {
        city = $(this).val();
        console.log(city);
    });
    
    $("#state").on("focusout", function() {
        state = $(this).val();
        console.log(state);
    });
    
    $("#zipcode").on("focusout", function() {
        zipcode = $(this).val();
        console.log(zipcode);
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
        }
    });
});

$('.timepicker').datetimepicker({
  datepicker:false,
  format:'H:i'
});
</script>

@stop