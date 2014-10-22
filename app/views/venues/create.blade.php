@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 well">
            <h1>Create a Venue</h1>
            {{ Form::open(['action' => 'VenuesController@store', 'method' => 'POST', 'files' => true, 'class' => 'form']) }}

            @include('venues.form')
            
            <div class="form-group">
                {{ Form::reset('Reset', ['class' => 'btn btn-default']) }}
                {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
            </div>

            {{ Form::close() }}
        </div>
    </div>
</div>
@stop