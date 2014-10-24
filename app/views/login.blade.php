@extends('layouts.master')
@section('top-script')
<style>.well{ margin-top: 60px; }</style>
@stop

@section('content')

<div class="row">
    <div class="col-md-4 col-md-offset-4 well">
        <h1>Login</h1>
        {{ Form::open(array('action' => 'HomeController@doLogin')) }}
            <div class="form-group">
                {{ Form::label('username', 'Username:') }}
                {{ Form::text('username', Input::old('username'), array('class' => 'form-control', 'placeholder' => 'username')) }}
            
                {{ $errors->first('username', '<span class="alert alert-danger alert-dismissible help-block"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button> :message</span>') }}
            </div>
            <div class="form-group">
                {{ Form::label('password', 'Password:') }}
                {{ Form::password('password', ['class' => 'form-control']) }}
                
                {{ $errors->first('password', '<span class="alert alert-danger alert-dismissible help-block"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button> :message</span>') }}
            </div>
            <div class="form-group">
                {{ Form::submit('Sign In', array('class' => 'btn btn-md')) }}
            </div>
        {{ Form::close() }}
    </div>
</div>

@stop
