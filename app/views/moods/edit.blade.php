@extends('layouts.master')
 @include('partials.navbar')
 @stop

@section('topscript')<title>Edit Your Moods</title> @stop

@section('content')
<div class='col-md-8'>
    <h2>Edit a Mood</h2>
    <hr>
    {{ Form::model($mood, ['route' => ['categories.update', $moods->id], 'method' => 'PUT']) }}

        @include('moods.form')

    <div class='form-group'>
        {{ Form::submit('Update', ['class' => 'btn btn-default']) }}
    </div>
    {{ Form::close() }}
</div>
@stop
@include('partials.footer')
@stop