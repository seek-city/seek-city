@extends('layouts.master')
 @include('partials.navbar')
 @stop
@section('content')
 <div class="col-lg-12 col-md-12 col-sm-12">

    <h1>Seek City</h1>
    <a class='btn btn-default' href={{ action('EventsController@create') }}>New Entry</a>
    <hr>
    <article> 
        @forelse($events as $event)
        <h3>{{{ $this->title }}}</h3>

        <p><span class='glyphicon glyphicon-time'></span> {{{ $event->updated_at->format(event::DATE_FORMAT) }}} by {{{ $event->user->email }}}</p>
        
        <img class='img-responsive' src="{{ $this->img }}" alt="">
 
        
        <p>{{{ $this->body }}}</p>
        
        <a class="btn btn-sm btn-primary" href="events/{{ $event->id }}">More Info <span class="glyphicon glyphicon-chevron-right"></span></a>
        
        @empty
        <p>No Entries match your search</p>
        @endforelse
    </article>
    <hr>

</div>
@stop
@include('partials.footer')
@stop

