@extends('layouts.master')

@section('top-script')
<link href="/css/loginstyle.css" rel='stylesheet' type='text/css' />
@stop
@section('content')

<div class="main">
    <div class="social-icons">
         <div class="col_1_of_f span_1_of_f"><a href="#">
          
            <ul class='facebook'>
                <i class="fb"></i>
                {{ link_to_action('AuthController@loginWithFacebook', 'Connect with Facebook') }} 
                <div class='clear'> </div>
            </ul>
            </a>
         </div> 
         <div class="col_1_of_f span_1_of_f"><a href="#">
            <ul class='twitter'>
              <i class="tw"> </i>
              <li>Connect with Twitter</li>
              <div class='clear'> </div>
            </ul>
            </a>
        </div>
        <div class="clear"> </div>
      </div>
      <h2>or Login through Seek City</h2>
       {{ Form::open(array('action' => 'UsersController@getLogin')) }}
          <div class="form-group">
           <div class="lable-2">
                {{ Form::label('username', 'Username:') }}
                {{ Form::text('username', Input::old('username'), array('class' => 'form-control', 'placeholder' => 'username')) }}

                {{ $errors->first('username', '<span class="alert alert-danger alert-dismissible help-block"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button> :message</span>') }}</div>

                <div class="clear"> </div>
           </div>
           <div class="lable-2">
                <div class="form-group">
                {{ Form::label('password', 'Password:') }}
                {{ Form::password('password', ['class' => 'form-control']) }}

                {{ $errors->first('password', '<span class="alert alert-danger alert-dismissible help-block"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button> :message</span>') }}
            </div>
           </div>
           <div class="submit">
              <div class="form-group">
                {{ Form::submit('Sign In', array('class' => 'btn btn-md')) }}
            </div>
             {{ Form::close() }}
           </div>
           <div class="clear"> </div>
        <!-----//end-main---->
        </div>

@stop
@section('bottom-script')
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
@stop
