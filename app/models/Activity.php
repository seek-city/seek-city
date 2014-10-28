<?php

class Activity extends BaseModel
{

    public static $rules = [
        'title' => 'required|max:255',
        'body' => 'required',
        'activity_date' => 'required',
        'price' => 'required',
        'state' => 'max:2',
        'zipcode' => 'max:5'
    ];

    protected $fillable = [
        'title',
        'body',
        'activity_date',
        'image_path',
        'price',
        'address',
        'city',
        'state',
        'zipcode'
    ];
    
    public function getDates()
    {
        return array(
            'created_at',
            'updated_at',
            'activity_date'
        );
    }

    protected $table = 'activities';

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function moods()
    {
        return $this->belongsToMany('Mood');
    }

    public function categories()
    {
        return $this->belongsToMany('Category');
    }

    // DB STORES PRICE AS ARRAY VALS 0-4. 
    // RETURN TO DISPLAY STRING REPRESENTATION.
    public function getPrice()
    {
        switch($this->price){
            case 0:
                return 'Free';
            case 1:
                return '$';
            case 2:
                return '$$';
            case 3:
                return '$$$';
            case 4:
                return '$$$$';
        }
    }
     public function posts()
    {
        return $this->BelongsTo('Venue');
    }
}

