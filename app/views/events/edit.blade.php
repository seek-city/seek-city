@extends('layouts.master')
 @include('partials.navbar')
 @stop
 
@section('topscript')<title>Edit Your Event</title> @stop

@section('content')
<div class='col-md-8'>
    <h2>Edit an Event</h2>
    <hr>
    {{ Form::model($event, ['route' => ['events.update', $event->id], 'method' => 'PUT']) }}
    <div class='form-group'>
        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title', $event->title, ['class' => 'form-control', 'id' => 'title']) }}
        {{ $errors->first('title', '<br><div class="alert alert-info">:message</div>') }}
    </div>
    <div class='form-group'>
        {{ Form::label('body', 'Body:') }}
        {{ Form::textarea('body', $event->body, ['class' => 'form-control', 'id' => 'body', 'rows' => '5']) }}
        {{ $errors->first('body', '<br><div class="alert alert-info">:message</div>') }}
    </div>
    <div class='form-group'>
        {{ Form::submit('Update', ['class' => 'btn btn-default']) }}
    </div>
    {{ Form::close() }}
</div>
@stop
@include('partials.footer')
@stop

