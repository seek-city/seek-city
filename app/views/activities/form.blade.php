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
    {{ Form::label('image', 'Image:') }}
    {{ Form::file('image', ['id' => 'image']) }}
</div>
