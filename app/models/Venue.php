<?php

class Venue extends BaseModel {

    protected $table = 'venues';
    
    // Add your validation rules here
    public static $rules = [
        'name' => 'required|max:255',
        'address' => 'required',
        'city' => 'required',
        'state' => 'required',
        'zipcode' => 'required'
    ];

    // Don't forget to fill this array
    protected $fillable = [
        'name',
        'address',
        'city',
        'state',
        'zipcode',
        'phone_number',
        'parking_available',
        'open_hour',
        'close_hour',
        'website_url',
        'facebook_url',
        'google_url',
        'twitter_handle',
        'image_path'
    ];
    
    public function activities()
    {
        return $this->hasMany('Activity');
    }
}