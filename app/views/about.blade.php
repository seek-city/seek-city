@extends('layouts.master')
@yield('top-script')
<script src="//use.typekit.net/uyp8myz.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
@stop
@section('title')
<title>About Seek City</title>
@stop
@section('top-script')
 <link rel="stylesheet" href="{{ asset('/css/aboutpg.css'); }}">
@stop


@section('content')
<div class="sun">
  <div class="cloud">
    <div class="cloud_inner"></div>
  </div>
  
  <div class="cloud __cloud_bis">
    <div class="cloud_inner"></div>
  </div>
</div>

<div class="building">
    <div class="window1">
        <div class="window2">
            <div class="window3"></div>
        </div>
    </div>
</div>

@stop

@section('bottom-script')

@stop
