@extends('layouts.master')

@section('content')
    {{ Form::model(['action' => 'UsersController@store', 'method' => 'POST', 'files' => true]) }}

        @include('users.form')

    <div class='form-group'>
        {{ Form::reset('Reset', ['class' => 'btn btn-default']) }}
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    </div>
    
    {{ Form::close() }}
@stop