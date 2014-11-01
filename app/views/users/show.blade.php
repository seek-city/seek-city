@extends('layouts.master')

@section('title')
<title>{{{ $user->username }}}'s Profile</title>
@stop

@section('content')
<div class="col-md-10 col-md-offset-1 well">
    <h1>{{{ $user->getFirstName() . " " . $user->getLastName() }}}</h1>
    {{ link_to_action('UsersController@edit', 'Edit Profile', $user->id) }}
    <div class="userImage">
        <img src="{{{ $user->image_path }}}" alt="{{{ $user->username }}}">
    </div>
    <div class="userActivities">
        <h4>Your Posted Activities</h4>
        @forelse ($userActivities as $activity)
            <article>
                <h5>{{ link_to_action('ActivitiesController@show', $activity->title, $activity->id) }}</h5>
                <figure><img class="img-responsive" src="{{{ $activity->image_path }}}"></figure>
            </article>
        @empty
        <p>You have not created any activities yet.</p>
        
        @endforelse
        {{ $userActivities->links(); }}
    </div>
</div>
@stop