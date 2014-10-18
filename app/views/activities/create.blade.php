@extends('layouts.master')
 @include('partials.navbar')
 @stop
 
@section('topscript')<title>Create an activity</title> @stop

@section('content')
<div class='col-md-8'>
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
@include('partials.footer')
@stop
