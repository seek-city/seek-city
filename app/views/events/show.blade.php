@extends('layouts.master')
 @include('partials.navbar')
 @stop
@section('topscript')
<div class="col-md-6"> 

    <article> <!-- Event-->
        <h1>{{{ $event->title }}}</h1>

        <p class="lead">by {{{ $event->user->email }}}, on {{ $event->updated_at->format(Post::DATE_FORMAT) }}</p>

        @if (Auth::check())
        <!-- TO EDIT AN EVENT -->

        <!-- TO DELETE AN EVENT -->
        {{ Form::open(['method' => 'DELETE', 'action' => ['EventsController@destroy', $event->id], 'id' => 'delete-form']) }}
        <a class='btn btn-default' href={{ action('EventsController@edit', $event->id) }}>Edit</a>
        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
        {{ Form::close() }}
        @endif
        <hr>

        <img class="img-responsive" src="{{ $event->img }}" alt="">
        <hr>
        <p class="lead">{{{ $event->body }}}</p>
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
@stop
