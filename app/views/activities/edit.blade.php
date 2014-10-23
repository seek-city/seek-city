@extends('layouts.master')

@section('title')
Edit Your Activity
@stop

@section('content')
<div class='col-md-8 col-md-offset-2 well'>
    <h2>Edit an Activity</h2>
    <hr>
    {{ Form::model($activity, ['route' => ['activities.update', $activity->id], 'method' => 'PUT']) }}

        @include('activities.form')

    <div class='form-group'>
        {{ Form::reset('Reset', ['class' => 'btn btn-default']) }}
        {{ Form::submit('Update', ['class' => 'btn btn-default']) }}
    </div>
    {{ Form::close() }}
</div>
@stop