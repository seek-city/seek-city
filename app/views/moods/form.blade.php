<div class='form-group'>
    {{ Form::label('name', 'Name:') }}
    {{ Form::text('name', Input::old('name'), ['class' => 'form-control', 'id' => 'name']) }}
    {{ $errors->first('name', '<br><div class="alert alert-info">:message</div>') }}
</div>