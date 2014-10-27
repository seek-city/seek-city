@extends('layouts.master')

@section('title')
<title>Edit Your Activity</title>
@stop

@section('content')
<div class='col-md-8 col-md-offset-2 well form-wrap'>
    <h2>Edit an Activity</h2>
    <hr>
    {{ Form::model($activity, ['action' => ['ActivitiesController@update', $activity->id], 'method' => 'PUT', 'files' => true]) }}

        @include('activities.form')

    <div class='form-group'>
        {{ Form::reset('Reset', ['class' => 'btn btn-default']) }}
        {{ Form::submit('Update', ['class' => 'btn btn-default']) }}
    </div>
    {{ Form::close() }}
</div>
@stop

@section('bottom-script')
<script>
$('#datetimepicker').datetimepicker({
    formatTime:'g:i a',
    theme: 'dark'
});
</script>
@stop