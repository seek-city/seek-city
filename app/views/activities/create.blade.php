@extends('layouts.master')

@section('top-script')
<link rel="stylesheet" href="{{ asset('/css/menu.css'); }}">
@stop

@section('title')
<title>Create an activity</title>
@stop

@section('content')
<div class='col-md-8 col-md-offset-2 well form-wrap'>
    <h2>Create a New Activity</h2>
    <hr>
    {{ Form::open(['action' => 'ActivitiesController@store', 'method' => 'POST', 'files' => true]) }}

        @include('activities.form')

    <div class='form-group'>
        {{ Form::reset('Reset', ['class' => 'btn btn-default']) }}
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
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
    // $('#map_open').on('click', function () {
    //     "use strict";
    //     $("#cont").addClass("none");
    //     $("#Show_cont").removeClass("none");
    // });
    
});
</script>
@stop
@include('partials.footer')