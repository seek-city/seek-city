@extends('layouts.master')

@section('title')
Sign Up
@stop

@section('top-script')
<link rel="stylesheet" href="{{ asset('/css/menu.css'); }}">
@stop

@section('content')
<div class='col-md-8 col-md-offset-2 well form-wrap'>
    <h2>Sign Up</h2>
    <hr>
    {{ Form::open(['action' => 'UsersController@postIndex', 'method' => 'POST', 'files' => true]) }}

        @include('users.form')

    <div class='form-group'>
        {{ Form::reset('Reset', ['class' => 'btn btn-default']) }}
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    </div>
    
    {{ Form::close() }}
</div>
@stop
