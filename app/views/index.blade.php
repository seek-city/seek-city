@extends('layouts.master')

@section('top-script')
<link rel="stylesheet" href="{{ asset('/css/menu.css'); }}">
@stop

@section('content')
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 550">

<defs>
<g id="loney">
    <circle r="5%" fill-opacity="0" >
        <animate id="one" attributeName="fill-opacity" values="0; .1; .2; .25" begin="1s; repeat.click" dur=".5s" calcMode="discrete" fill="freeze"/>
    </circle> 
    <circle r="10%" fill-opacity="0" >
        <animate id="two" attributeName="fill-opacity" values="0; .1; .2; .25" begin="one.end+0.2s" dur=".5s" calcMode="discrete" fill="freeze"/>
        <animate id="radiussix" attributeName="r" values="10%; 0%" begin="radiusfive.end+0.1s" dur=".5s" calcMode="discrete" fill="freeze"/>
    </circle>
    <circle r="15%" fill-opacity="0" >
        <animate id="three" attributeName="fill-opacity" values="0; .1; .2; .25" begin="two.end+0.2s" dur=".5s" calcMode="discrete" fill="freeze"/>
        <animate id="radiusfive" attributeName="r" values="15%; 5%; 0%" begin="radiusfour.end+0.1s" dur=".5s" calcMode="discrete" fill="freeze"/>
    </circle>
    <circle r="20%" fill-opacity="0" >
        <animate id="four" attributeName="fill-opacity" values="0; .1; .2; .25" begin="three.end+0.2s" dur=".5s" calcMode="discrete" fill="freeze"/>
        <animate id="radiusfour" attributeName="r" values="20%; 10%; 0%" begin="radiusthree.end+0.1s" dur=".5s" calcMode="discrete" fill="freeze"/>
    </circle>
    <circle r="25%" fill-opacity="0" >
        <animate id="five" attributeName="fill-opacity" values="0; .1; .2; .25" begin="four.end+0.2s" dur=".5s" calcMode="discrete" fill="freeze"/>
        <animate id="radiusthree" attributeName="r" values="25%; 15%; 5%; 0%" begin="radiustwo.end+0.1s" dur=".5s" calcMode="discrete" fill="freeze"/>
    </circle>
    <circle r="30%" fill-opacity="0" >
        <animate id="six" attributeName="fill-opacity" values="0; .1; .2; .25" begin="five.end+0.2s" dur=".5s" calcMode="discrete" fill="freeze"/>
        <animate id="radiustwo" attributeName="r" values="30%; 20%; 10%; 0%" begin="radiusone.end+0.1s" dur=".5s" calcMode="discrete" fill="freeze"/>
    </circle>
    <circle r="35%" fill-opacity="0" >
        <animate id="seven" attributeName="fill-opacity" values="0; .1; .2; .25" begin="six.end+0.2s" dur=".5s" calcMode="discrete" fill="freeze"/>
        <animate id="radiusone" attributeName="r" values="35%; 25%; 15%; 5%; 0%" begin="seven.end+0.1s; repeat.click+4.7s" dur=".5s" calcMode="discrete" fill="freeze"/>
    </circle>
     <circle r="0%" fill-opacity="0" >
        <animate id="eight" attributeName="fill-opacity" values="0;" begin="1s; repeat.click" dur=".5s" calcMode="discrete" fill="freeze"/>
    </circle>
</g>
</defs>

<g id="repeat" cursor="pointer">
  <use xlink:href="#loney" x="0%" y="0%" fill="crimson">
     <animate attributeName="x" values="0%; 50%; -100%" begin="radiussix.end+0.2s" dur="1.5s" fill="freeze"/>
    <animate attributeName="y" values="0%; 50%; 200%" begin="radiussix.end+0.2s" dur="1.5s" fill="freeze"/> 
    </use>
   <use xlink:href="#loney" x="50%" y="0%" fill="gold">
     <animate attributeName="y" values="0%; 50%; -200%" begin="radiussix.end+0.2s" dur="1.5s" fill="freeze"/> 
    </use>
    <use xlink:href="#loney" x="100%" y="0%" fill="salmon">
     <animate attributeName="x" values="100%; 50%; 200%" begin="radiussix.end+0.2s" dur="1.5s" fill="freeze"/>
     <animate attributeName="y" values="0%; 50%; 200%" begin="radiussix.end+0.2s" dur="1.5s" fill="freeze"/> 
    </use>
    <use xlink:href="#loney" x="100%" y="100%" fill="teal">
     <animate attributeName="x" values="100%; 50%; 200%" begin="radiussix.end+0.2s" dur="1.5s" fill="freeze"/>
     <animate attributeName="y" values="100%; 50%; -100%" begin="radiussix.end+0.2s" dur="1.5s" fill="freeze"/>
    </use> 
    <use xlink:href="#loney" x="50%" y="100%" fill="thistle">
     <animate attributeName="y" values="100%; 50%; 200%" begin="radiussix.end+0.2s" dur="1.5s" fill="freeze"/> 
    </use>
    <use xlink:href="#loney" x="0%" y="50%" fill="tomato">
     <animate attributeName="x" values="0%; 50%; 200%" begin="radiussix.end+0.2s" dur="1.5s" fill="freeze"/>
    </use>
    <use xlink:href="#loney" x="100%" y="50%" fill="violet">
     <animate attributeName="x" values="100%; 50%; -100%" begin="radiussix.end+0.2s" dur="1.5s" fill="freeze"/>
    </use>
    <use xlink:href="#loney" x="0%" y="100%" fill="seagreen"> 
     <animate attributeName="x" values="0%; 50%; -100%" begin="radiussix.end+0.2s" dur="1.5s" fill="freeze"/>
     <animate id="finish" attributeName="y" values="100%; 50%; -100%" begin="radiussix.end+0.2s" dur="1.5s" fill="freeze"/>
    </use>
</g> 



</use>

</svg>

        <main id="main" class="main"></main>
@stop


@stop

@section('bottom-script')
<script>
    $(document).ready(function(){
        $("button[data-title='Family Time']").on('click', function(e){
            e.preventDefault();
            $("main").append('<div class="col-md-1 col-md-offset-1 queryBubble">Family Time</div>');
        });
        $("button[data-title='Date Night']").on('click', function(e){
            e.preventDefault();
            $("main").append('<div class="col-md-1 col-md-offset-1 queryBubble">Date Night</div>');
        });
    });
</script>
@stop

