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
    {{ Form::select('price', ['$','$$', '$$$', '$$$$']) }}
    {{ $errors->first('price', '<br><div class="alert alert-info">:message</div>') }}
</div>
<div class='form-group'>
    {{ Form::label('activity_date', 'When') }}
    <input type="datetime" name="activity_date" class="form-control" id="activity_date">
</div>
<div class='form-group'>
    {{ Form::label('categories', 'Categories:') }}
    {{ Form::select('categories[]', $categories, Input::old('categories'), ['class' => 'form-control', 'multiple']) }}
</div>
<div class='form-group'>
    {{ Form::label('moods', 'Moods:') }}
    {{ Form::select('moods[]', $moods, Input::old('moods'), ['class' => 'form-control', 'multiple']) }}
</div>
<div class='form-group'>
    {{ Form::label('image_path', 'Image:') }}
    {{ Form::file('image_path', ['id' => 'image_path']) }}
</div>

