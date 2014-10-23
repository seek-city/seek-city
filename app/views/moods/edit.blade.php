@extends('layouts.master')

@section('title')
Edit the Mood
@stop

@section('content')
<div class='col-md-8 col-md-offset-2 well'>
    <h2>Edit the Mood</h2>
    <hr>
    {{ Form::model($mood, ['route' => ['moods.update', $mood->id], 'method' => 'PUT']) }}

        @include('moods.form')

    <div class='form-group'>
        {{ Form::reset('Reset', ['class' => 'btn btn-default']) }}
        {{ Form::submit('Update', ['class' => 'btn btn-default']) }}
    </div>
    {{ Form::close() }}
</div>
@stop