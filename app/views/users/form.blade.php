    <div class='form-group'>
        {{ Form::label('username', 'Username:') }}
        {{ Form::text('username', Input::old('username'), ['class' => 'form-control', 'id' => 'username']) }}
        {{ $errors->first('username', '<br><div class="alert alert-info">:message</div>') }}
    </div>
    <div class='form-group'>
        {{ Form::label('password', 'Password:') }}
        {{ Form::password('password', ['class' => 'form-control', 'id' => 'password']) }}
        {{ $errors->first('password', '<br><div class="alert alert-info">:message</div>') }}
    </div>
    <div class='form-group'>
        {{ Form::label('email', 'Email:') }}
        {{ Form::email('email', Input::old('email'), ['class' => 'form-control','id' => 'email']) }}
        {{ $errors->first('email', '<br><div class="alert alert-info">:message</div>') }}
    </div>
    <div class='form-group'>
        {{ Form::label('first_name', 'First Name:') }}
        {{ Form::text('first_name', Input::old('first_name'), ['class' => 'form-control','id' => 'first_name']) }}
        {{ $errors->first('first_name', '<br><div class="alert alert-info">:message</div>') }}
    </div>
    <div class='form-group'>
        {{ Form::label('last_name', 'Last Name:') }}
        {{ Form::text('last_name', Input::old('last_name'), ['class' => 'form-control','id' => 'last_name']) }}
        {{ $errors->first('last_name', '<br><div class="alert alert-info">:message</div>') }}
    </div>
    <div class='form-group'>
        {{ Form::label('image_path', 'Image:') }}
        {{ Form::file('image_path', ['id' => 'image_path']) }}
    </div>