@extends('layouts.master')
 @include('partials.navbar')
 @stop
 
@section('topscript')<title>Edit Your Activity</title> @stop

@section('content')
<div class='col-md-8'>
    <h2>Edit an Activity</h2>
    <hr>
    {{ Form::model($activity, ['route' => ['activities.update', $activity->id], 'method' => 'PUT']) }}
    <div class='form-group'>
        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title', $activity->title, ['class' => 'form-control', 'id' => 'title']) }}
        {{ $activities->first('title', '<br><div class="alert alert-info">:message</div>') }}
    </div>
    <div class='form-group'>
        {{ Form::label('body', 'Body:') }}
        {{ Form::textarea('body', $activity->body, ['class' => 'form-control', 'id' => 'body', 'rows' => '5']) }}
        {{ $activities->first('body', '<br><div class="alert alert-info">:message</div>') }}
    </div>
    <div class='form-group'>
        {{ Form::submit('Update', ['class' => 'btn btn-default']) }}
    </div>
    {{ Form::close() }}
</div>
@stop
@include('partials.footer')
@stop

