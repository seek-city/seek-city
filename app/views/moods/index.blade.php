extends('layouts.master')

@section('title')
<title>Category</title>
@stop

@section('content')
<div class="col-md-10 col-md-offset-1 well">
    <h1>Categories</h1>
    <div class="userImage">
    </div>
    <div class="Moods">
        <h4>Your Categories</h4>
        @forelse ($moods as $mood)
        	<h4>{{{ $mood->name }}}</h4>
        	@forelse ($mood->activities() as $activity)
            <article>
                <h5>{{ link_to_action('ActivitiesController@show', $moods()->name, $mood->id) }}</h5>
                <figure><img class="img-responsive" src="{{{ $activity->image_path }}}"></figure>
            </article>
            @empty
            <p>No associated activities,</p>
            @endforelse
        @empty
        <p>You have not created any moods yet.</p>
    
        
        @endforelse
        {{ $userActivities->links(); }}
    </div>
</div>
@stop