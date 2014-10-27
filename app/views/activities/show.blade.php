@extends('layouts.master')

@section('title')
<title>{{{ $activity->title }}}</title>
@stop

@section('content')
<div class="col-md-6 col-md-offset-3 well"> 

    <article> <!-- Activity -->
        <h1>{{{ $activity->title }}}</h1>

        <p class="lead">on {{ $activity->activity_date->format(Activity::DATE_FORMAT) }}</p>

        @if (Auth::check())

        <!-- TO EDIT AN EVENT -->

        <!-- TO DELETE AN EVENT -->
        {{ Form::open(['method' => 'DELETE', 'action' => ['ActivitiesController@destroy', $activity->id], 'id' => 'delete-form']) }}
        <a class='btn btn-default' href="{{ action('ActivitiesController@edit', $activity->id) }}">Edit</a>
        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
        {{ Form::close() }}
        <hr>
        @endif
        @if ($activity->offsetExists('image_path'))
        <img class="img-responsive" src="{{{ $activity->image_path }}}" alt="{{{ $activity->title }}}">
        @endif
        <hr>
        <p class="lead">{{{ $activity->body }}}</p>
        <p>Price: {{{ $activity->getPrice() }}}</p>
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
