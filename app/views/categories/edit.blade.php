@extends('layouts.master')

@section('title')
Edit the Category
@stop

@section('content')
<div class="col-md-8 col-md-offset-2 well">
    <h2>Edit the Category</h2>
    <hr>
    {{ Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT']) }}

        @include('categories.form')

    <div class="form-group">
        {{ Form::reset('Reset', ['class' => 'btn btn-default']) }}
        {{ Form::submit('Update', ['class' => 'btn btn-default']) }}
    </div>
    {{ Form::close() }}
</div>
@stop