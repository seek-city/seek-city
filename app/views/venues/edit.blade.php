@extends('layouts.master')

@section('content')

{{ Form::model(['action' => 'VenuesController@store', 'method' => 'POST', 'files' => true]) }}

    @include('venues.form')
    
    <div class="form-group">
        {{ Form::reset('Reset', ['class' = 'btn btn-default']) }}
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    </div>

{{ Form::close() }}
@stop