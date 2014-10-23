@extends('layouts.master')

@section('title')
Create an Mood
@stop

@section('content')
<div class='col-md-8 col-md-offset-2 well'>
    <h2>Create a New Mood</h2>
    <hr>
    {{ Form::open(['action' => 'MoodsController@store', 'method' => 'POST']) }}

        @include('moods.form')
    
    <div class='form-group'>
        {{ Form::reset('Reset', ['class' => 'btn btn-default']) }}
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    </div>
    {{ Form::close() }}
</div>
@stop
