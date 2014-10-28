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
    {{ Form::select('price', ['Free','$ = under $10','$$ = $11-$30', '$$$ = $31- $60', '$$$$ = above $61']) }}
    {{ $errors->first('price', '<br><div class="alert alert-info">:message</div>') }}
</div>
<div class='form-group'>
    {{ Form::label('activity_date', 'When') }}
    {{ Form::text('activity_date', Input::old('activity_date'), ['class' => 'form-control', 'id' => 'datetimepicker']) }}
</div>
<div class='form-group'>
    {{ Form::label('address', 'Address:') }}
    {{ Form::text('address', Input::old('address'), ['class' => 'form-control', 'id' => 'address']) }}
    {{ Form::label('city', 'City:') }}
    {{ Form::text('city', Input::old('city'), ['class' => 'form-control', 'id' => 'city']) }}
    {{ Form::label('state', 'State:') }}
    {{ Form::text('state', Input::old('state'), ['class' => 'form-control', 'id' => 'state']) }}
    {{ Form::label('zipcode', 'Zipcode:') }}
    {{ Form::text('zipcode', Input::old('zipcode'), ['class' => 'form-control', 'id' => 'zipcode']) }}
    <!--map-->
    <div id="map_canvas" class="map"></div> 
    <!--/map-->
    
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
