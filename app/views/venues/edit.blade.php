@extends('layouts.master')

@section('title')
Edit Venue
@stop

@section('content')
<div class='col-md-8 col-md-offset-2 well form-wrap'>
    <h2>Edit Venue</h2>
    <hr>
{{ Form::model($venue, ['action' => 'VenuesController@update', 'method' => 'POST', 'files' => true]) }}

    @include('venues.form')
    
    <div class="form-group">
        {{ Form::reset('Reset', ['class' = 'btn btn-default']) }}
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    </div>

{{ Form::close() }}
@stop