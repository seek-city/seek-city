@extends('layouts.master')
 @include('partials.navbar')
 @stop
@section('topscript')
<div class="col-md-6"> 

    <article> <!-- Activity -->
        <h1>{{{ $category->name }}}</h1>

        <p class="lead">by on {{ $category->updated_at->format(Category::DATE_FORMAT) }}</p>

        @if (Auth::check())
        @endif 
        <!-- TO EDIT AN EVENT -->

        <!-- TO DELETE AN EVENT -->
        {{ Form::open(['method' => 'DELETE', 'action' => ['CategoriesController@destroy', $category->id], 'id' => 'delete-form']) }}
        <a class='btn btn-default' href={{ action('CategoriesController@edit', $category->id) }}>Edit</a>
        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
        {{ Form::close() }}
        <hr>

        <img class="img-responsive" src="{{ $category->img }}" alt="">
        <hr>
        <p class="lead">{{{ $category->name }}}</p>
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