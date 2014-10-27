@extends('layouts.master')
@include('partials.navbar')

@section('content')
<div class="col-md-6"> 

    <article> <!-- Activity -->
        <h1>{{{ $mood->name }}}</h1>

        <p class="lead">by on {{ $mood->updated_at->format(Mood::DATE_FORMAT) }}</p>

        @if (Auth::check())
        @endif 
        <!-- TO EDIT AN EVENT -->

        <!-- TO DELETE AN EVENT -->
        {{ Form::open(['method' => 'DELETE', 'action' => ['MoodsController@destroy', $mood->id], 'id' => 'delete-form']) }}
        <a class='btn btn-default' href="{{ action('MoodsController@edit', $mood->id) }}">Edit</a>
        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
        {{ Form::close() }}
        <hr>
        <p class="lead">{{{ $mood->name }}}</p>
    </article>
        </div>
    </div>
</div> <!-- end col-md-6 -->
@stop

@section('bottom-script')
<script>
$('#delete-form').submit(function(event) {
    if (!confirm('Are you sure you want to delete this?')) {
        event.preventDefault();
    };
});
</script>
@stop
@include('partials.footer')
<script src="{{ asset('/js/maps.js'); }}"></script>
@stop