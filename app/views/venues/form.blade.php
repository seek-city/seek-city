	 <div class='form-group'>
        {{ Form::label('venue_name', 'Name:') }}
        {{ Form::text('venue_name', Input::old('venue_name'), ['class' => 'form-control', 'id' => 'venue_name']) }}
        {{ $errors->first('venue_name', '<br><div class="alert alert-info">:message</div>') }}
    </div>
    <div class='form-group'>
        {{ Form::label('address', 'Address:') }}
        {{ Form::address1('address', ['class' => 'form-control', 'id' => 'address']) }}
        {{ $errors->first('address', '<br><div class="alert alert-info">:message</div>') }}
    </div>
    <div class='form-group'>
        {{ Form::label('city', 'City:') }}
        {{ Form::text('city', Input::old('city'), ['class' => 'form-control','id' => 'city']) }}
        {{ $errors->first('city', '<br><div class="alert alert-info">:message</div>') }}
    </div>
    <div class='form-group'>
        {{ Form::label('state', 'State:') }}
        {{ Form::text('state', Input::old('state'), ['class' => 'form-control','id' => 'state']) }}
        {{ $errors->first('state', '<br><div class="alert alert-info">:message</div>') }}
    </div>
     <div class='form-group'>
        {{ Form::label('zip', 'Zip:') }}
        {{ Form::text('zip', Input::old('zip'), ['class' => 'form-control','id' => 'zip']) }}
        {{ $errors->first('zip', '<br><div class="alert alert-info">:message</div>') }}
    </div>
     <div class='form-group'>
        {{ Form::label('phone', 'Phone:') }}
        {{ Form::text('phone', Input::old('phone'), ['class' => 'form-control','id' => 'phone']) }}
        {{ $errors->first('phone', '<br><div class="alert alert-info">:message</div>') }}
    </div>
     <div class='form-group'>
        {{ Form::label('website', 'Website:') }}
        {{ Form::text('website', Input::old('website'), ['class' => 'form-control','id' => 'website']) }}
        {{ $errors->first('website', '<br><div class="alert alert-info">:message</div>') }}
    </div>
     <div class='form-group'>
        {{ Form::label('parking', 'Parking:') }}
        {{ Form::checkbox('parking', Input::old('parking'), ['class' => 'form-control','id' => 'parking']) }}
        {{ $errors->first('parking', '<br><div class="alert alert-info">:message</div>') }}
    </div>
      <div class='form-group'>
        {{ Form::label('opening_hour', 'Opening_hour:') }}
        {{ Form::select('opening_hour', Input::old('opening_hour'), ['class' => 'form-control','id' => 'opening_hour']) }}
        {{ $errors->first('opening_hour', '<br><div class="alert alert-info">:message</div>') }}
    </div>
     <div class='form-group'>
        {{ Form::label('closing_hour', 'Closing_hour:') }}
        {{ Form::select('closing_hour', Input::old('closing hour'), ['class' => 'form-control','id' => 'closing_hour']) }}
        {{ $errors->first('closing_hour', '<br><div class="alert alert-info">:message</div>') }}
    </div>
      <div class='form-group'>
        {{ Form::label('facebook_url', 'Facebok_url:') }}
        {{ Form::text('facebook_url', Input::old('facebook_url'), ['class' => 'form-control','id' => 'facebook_url']) }}
        {{ $errors->first('facebook_url', '<br><div class="alert alert-info">:message</div>') }}
    </div>
     <div class='form-group'>
        {{ Form::label('google_places_url', 'Google_places_url:') }}
        {{ Form::text('google_places_url', Input::old('google_places_url'), ['class' => 'form-control','id' => 'google_places_url']) }}
        {{ $errors->first('google_places_url', '<br><div class="alert alert-info">:message</div>') }}
    </div>
      <div class='form-group'>
        {{ Form::label('twitter_handle', 'Twitter_handle:') }}
        {{ Form::text('twitter_handle', Input::old('twitter_handle'), ['class' => 'form-control','id' => 'twitter_handle']) }}
        {{ $errors->first('twitter_handle', '<br><div class="alert alert-info">:message</div>') }}
    </div>
    <div class='form-group'>
        {{ Form::label('image_path', 'Image:') }}
        {{ Form::file('image_path', ['id' => 'image_path']) }}
    </div>
     
   
   