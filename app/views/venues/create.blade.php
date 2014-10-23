@extends('layouts.master')

@section('title')
Create a Venue
@stop

@section('content')
<div class="col-md-8 col-md-offset-2 well">
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