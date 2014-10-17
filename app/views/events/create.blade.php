@extends('layouts.master')
 @include('partials.navbar')
 @stop
 
@section('topscript')<title>Create an event</title> @stop

@section('content')
<div class='col-md-8'>
    <h2>Create a New Event</h2>
    <hr>
    {{ Form::open(['action' => 'EventsController@store', 'method' => 'POST', 'files' => true]) }}
    <div class='form-group'>
        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title', Input::old('title'), ['class' => 'form-control', 'id' => 'title']) }}
        {{ $errors->first('title', '<br><div class="alert alert-info">:message</div>') }}
    </div>
    <div class='form-group'>
        {{ Form::label('body', 'Body:') }}
        {{ Form::textarea('body', Input::old('body'), ['class' => 'form-control', 'id' => 'body', 'rows' => '5']) }}
        {{ $errors->first('body', '<br><div class="alert alert-info">:message</div>') }}
    </div>
    <div class='form-group'>
        {{ Form::label('image', 'Image:') }}
        {{ Form::file('image', ['id' => 'image']) }}
    </div>
    <div class='form-group'>
        {{ Form::reset('Reset', ['class' => 'btn btn-default']) }}
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    </div>
    {{ Form::close() }}
</div>
@stop
@include('partials.footer')
@stop
