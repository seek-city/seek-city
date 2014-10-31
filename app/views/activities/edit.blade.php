@extends('layouts.master')

@section('title')
<title>Edit Your Activity</title>
@stop

@section('top-script')
<link rel="stylesheet" href="{{ asset('/css/menu.css'); }}">
@stop

@section('content')
<div class='col-md-8 col-md-offset-2 well form-wrap'>
    <h2>Edit an Activity</h2>
    <hr>
    {{ Form::model($activity, ['action' => ['ActivitiesController@update', $activity->id], 'method' => 'PUT', 'files' => true]) }}

        @include('activities.form')

    <div class='form-group'>
        {{ Form::reset('Reset', ['class' => 'btn btn-default']) }}
        {{ Form::submit('Update', ['class' => 'btn btn-default']) }}
    </div>
    {{ Form::close() }}
</div>
@stop

@section('bottom-script')
<script>
$(document).ready(function() {
    $('#datetimepicker').datetimepicker({
        formatTime:'g:i a',
        theme: 'dark'
    });
    $('#venueName').hide();
    $('#newVenue').change(function(){
        if(this.checked) {
            $('#venueName').fadeIn('slow');
            $('#venueSelect').fadeOut('slow');
        }
        else {
            $('#venueName').fadeOut('slow');
            $('#venueSelect').fadeIn('slow');
        }
    });
    
});
</script>
@stop
@include('partials.footer')