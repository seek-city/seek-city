@extends('layouts.master')
 @include('partials.navbar')
 @stop
@section('topscript')
<div class="col-md-6"> 

    <article> <!-- Activity -->
        <h1>{{{ $activity->title }}}</h1>

        <p class="lead">by on {{ $activity->updated_at->format(Activity::DATE_FORMAT) }}</p>

        @if (Auth::check())
        @endif 
        <!-- TO EDIT AN EVENT -->

        <!-- TO DELETE AN EVENT -->
        {{ Form::open(['method' => 'DELETE', 'action' => ['ActivitiesController@destroy', $activity->id], 'id' => 'delete-form']) }}
        <a class='btn btn-default' href={{ action('ActivitiesController@edit', $activity->id) }}>Edit</a>
        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
        {{ Form::close() }}
        <hr>

        <img class="img-responsive" src="{{ $activity->img }}" alt="">
        <hr>
        <p class="lead">{{{ $activity->body }}}</p>
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
