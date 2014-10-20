@extends('layouts.master')
 @include('partials.navbar')
 @stop

@section('topscript')<title>Edit Your Activity</title> @stop

@section('content')
<div class='col-md-8'>
    <h2>Edit an Activity</h2>
    <hr>
    {{ Form::model($activity, ['route' => ['activities.update', $activity->id], 'method' => 'PUT']) }}

        @include('activities.form')

    <div class='form-group'>
        {{ Form::submit('Update', ['class' => 'btn btn-default']) }}
    </div>
    {{ Form::close() }}
</div>
@stop
@include('partials.footer')
@stop

