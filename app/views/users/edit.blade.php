@extends('layouts.master')

@section('title')
Edit Your Profile
@stop

@section('content')
<div class='col-md-8 col-md-offset-2 well'>
    <h2>Edit Your Profile</h2>
    <hr>
    {{ Form::model($user, ['action' => 'UsersController@update', $user->id], 'method' => 'PUT', 'files' => true]) }}

        @include('users.form')

    <div class='form-group'>
        {{ Form::reset('Reset', ['class' => 'btn btn-default']) }}
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    </div>
    
    {{ Form::close() }}
@stop