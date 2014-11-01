	<div class='form-group'>
        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', Session::has('venueName') ? Session::get('venueName') : Input::old('name'), ['class' => 'form-control', 'id' => 'name']) }}
        {{ $errors->first('name', '<br><div class="alert alert-info">:message</div>') }}
    </div>
    <div class='form-group'>
        {{ Form::label('address', 'Address:') }}
        {{ Form::text('address', Input::old('address'),['class' => 'form-control addressInputs', 'id' => 'address']) }}
        {{ $errors->first('address', '<br><div class="alert alert-info">:message</div>') }}
    </div>
    <div class='form-group'>
        {{ Form::label('city', 'City:') }}
        {{ Form::text('city', Input::old('city'), ['class' => 'form-control addressInputs','id' => 'city']) }}
        {{ $errors->first('city', '<br><div class="alert alert-info">:message</div>') }}
    </div>
    <div class='form-group'>
        {{ Form::label('state', 'State:') }}
        {{ Form::text('state', Input::old('state'), ['class' => 'form-control addressInputs','id' => 'state']) }}
        {{ $errors->first('state', '<br><div class="alert alert-info">:message</div>') }}
    </div>
     <div class='form-group'>
        {{ Form::label('zipcode', 'Zipcode:') }}
        {{ Form::text('zipcode', Input::old('zipcode'), ['class' => 'form-control addressInputs','id' => 'zipcode']) }}
        {{ $errors->first('zipcode', '<br><div class="alert alert-info">:message</div>') }}
    </div>
    <div id="map_canvas" style="width: 100%; height: 250px;"></div>
     <div class='form-group'>
        {{ Form::label('phone_number', 'Phone:') }}
        {{ Form::text('phone_number', Input::old('phone_number'), ['class' => 'form-control','id' => 'phone_number']) }}
        {{ $errors->first('phone_number', '<br><div class="alert alert-info">:message</div>') }}
    </div>
     <div class='form-group'>
        {{ Form::label('website_url', 'Website:') }}
        {{ Form::text('website_url', Input::old('website_url'), ['class' => 'form-control','id' => 'website_url']) }}
        {{ $errors->first('website_url', '<br><div class="alert alert-info">:message</div>') }}
    </div>
     <div class='form-group'>
        {{ Form::label('parking_available', 'Parking:') }} 
        {{ Form::radio('parking_available', 'Yes') }} {{ Form::label('parking_available', 'Yes') }}
        {{ Form::radio('parking_available', 'No') }} {{ Form::label('parking_available', 'No') }}
        {{ $errors->first('parking_available', '<br><div class="alert alert-info">:message</div>') }}
    </div>
      <div class='form-group'>
        {{ Form::label('open_hour', 'Open:') }}
        {{ Form::text('open_hour', '', ['class' => 'form-control', 'id' => "open_hour"]) }}
        {{ $errors->first('open_hour', '<br><div class="alert alert-info">:message</div>') }}
    </div>
     <div class='form-group'>
        {{ Form::label('close_hour', 'Close:') }}
        {{ Form::text('close_hour', '', ['class' => 'form-control', 'id' => 'close_hour']) }}
        {{ $errors->first('close_hour', '<br><div class="alert alert-info">:message</div>') }}
    </div>
      <div class='form-group'>
        {{ Form::label('facebook_url', 'Facebook:') }}
        {{ Form::text('facebook_url', Input::old('facebook_url'), ['class' => 'form-control','id' => 'facebook_url']) }}
        {{ $errors->first('facebook_url', '<br><div class="alert alert-info">:message</div>') }}
    </div>
     <div class='form-group'>
        {{ Form::label('google_url', 'Google+:') }}
        {{ Form::text('google_url', Input::old('google_url'), ['class' => 'form-control','id' => 'google_url']) }}
        {{ $errors->first('google_url', '<br><div class="alert alert-info">:message</div>') }}
    </div>
      <div class='form-group'>
        {{ Form::label('twitter_handle', 'Twitter:') }}
        {{ Form::text('twitter_handle', Input::old('twitter_handle'), ['class' => 'form-control','id' => 'twitter_handle']) }}
        {{ $errors->first('twitter_handle', '<br><div class="alert alert-info">:message</div>') }}
    </div>
    <div class='form-group'>
        {{ Form::label('image_url', 'Image:') }}
        {{ Form::file('image_url', ['id' => 'image_url']) }}
    </div>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCsbzuJDUEOoq-jS1HO-LUXW4qo0gW9FNs&amp;sensor=false"></script>
    <script>
    var mapOptions = {
        zoom: 10,
        center: new google.maps.LatLng(29.4814305, -98.5144044),
        streetViewControl: true,
        animation: google.maps.Animation.DROP
    };
    
    var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
    google.maps.event.addListener(marker, 'click', toggleBounce);
    var geocoder = new google.maps.Geocoder();
    var address = '';
    var city = '';
    var state = '';
    var zipcode = '';
    var m = 0;
    var x;
    
    $(".addressInputs").change(function() {
        $("#address").focusout(function() {
            address = $(this).val();
            console.log(address);
        });
        
        $("#city").on("focusout", function() {
            city = $(this).val();
            console.log(city);
        });
        
        $("#state").on("focusout", function() {
            state = $(this).val();
            console.log(state);
        });
        
        $("#zipcode").on("focusout", function() {
            zipcode = $(this).val();
            console.log(zipcode);
        });
        mapAddress = address + ", " + city + ", " + state + ", " + zipcode;

        geocoder.geocode( { 'address': address }, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                pin = new google.maps.Marker({
                    position: results[0].geometry.location,
                    map: map
                });
            }
                
            m++;
        });
    });
    </script>