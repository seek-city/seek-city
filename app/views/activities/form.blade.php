<div class='form-group'>
    {{ Form::label('title', 'Title:') }}
    {{ Form::text('title', Input::old('title'), ['class' => 'form-control', 'id' => 'title']) }}
    {{ $errors->first('title', '<br><div class="alert alert-info">:message</div>') }}
</div>
<div class='form-group'>
    {{ Form::label('body', 'Body:') }}
    {{ Form::textarea('body', Input::old('body'), ['class' => 'form-control', 'id' => 'body', 'rows' => '5']) }}
    {{ $errors->first('body', '<br><div class="alert alert-info">:message</div>') }}
</div>
<div class='form-group'>
    {{ Form::label('price', 'Price:') }}
    {{ Form::select('price', ['Free','$ = under $10','$$ = $11-$30', '$$$ = $31- $60', '$$$$ = above $61'], 'Free', ['class' => 'form-control']) }}
    {{ $errors->first('price', '<br><div class="alert alert-info">:message</div>') }}
</div>
<div class='form-group'>
    {{ Form::label('activity_date', 'When') }}
    {{ Form::text('activity_date', Input::old('activity_date'), ['class' => 'form-control', 'id' => 'datetimepicker']) }}
    {{ $errors->first('activity_date', '<br><div class="alert alert-info">:message</div>') }}
</div>
<div class='form-group'>
    <div id="venueSelect">
        {{ Form::label('venue', 'Choose an Existing Venue') }}
        {{ Form::select('venue', $venues, isset($activity) ? $activity->venue_id : '', ['class' => 'form-control', 'id' => 'venue']) }}
    </div>
    {{ Form::label('newVenue', 'Create a New Venue:') }} {{ Form::checkbox('newVenue', 1, false, ['id' => 'newVenue']) }}
    {{ Form::text('venueName', Input::old('venueName'), ['class' => 'form-control', 'id' => 'venueName', 'placeholder' => 'Add a venue...']) }}
</div>
<div class='form-group'>
    {{ Form::label('category_options', 'Categories:') }}
    {{ Form::select('category_options[]', $category_options, isset($activity) ? Input::old('category_options', $activity->categories()->lists('category_id')) : '', ['class' => 'form-control', 'multiple']) }}
</div>
<div class='form-group'>
    {{ Form::label('mood_options', 'Moods:') }}
    {{ Form::select('mood_options[]', $mood_options, isset($activity) ? Input::old('mood_options', $activity->moods()->lists('mood_id')) : '', ['class' => 'form-control', 'multiple']) }}
</div>
<div class='form-group'>
    {{ Form::label('image_path', 'Image:') }}
    {{ Form::file('image_path', ['id' => 'image_path']) }}
</div>