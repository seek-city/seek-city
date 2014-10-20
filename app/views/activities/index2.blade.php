@extends('layouts.master')

@section('content')
 <div class="col-lg-12 col-md-12 col-sm-12">

    <h1>Seek City</h1>
    <a class='btn btn-default' href="{{ action('ActivitiesController@create') }}">New Entry</a>
    <hr>
    <article> 
        @forelse($activities as $activity)
        <h3>{{{ $activity->title }}}</h3>

        <p><span class='glyphicon glyphicon-time'></span> {{{ $activity->updated_at->format(Activity::DATE_FORMAT) }}} </p>
        
        <img class='img-responsive' src="{{ $activity->img }}" alt="">
 
        
        <p>{{{ $activity->body }}}</p>
        
        <a class="btn btn-sm btn-primary" href="activities/{{ $activity->id }}">More Info <span class="glyphicon glyphicon-chevron-right"></span></a>
        
        @empty
        <p>No Entries match your search</p>
        @endforelse
    </article>
    <hr>

</div>
@stop


