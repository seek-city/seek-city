<?php

class Activity extends BaseModel
{

    // Add your validation rules here
    public static $rules = [
        'title' => 'required|max:255',
        'body' => 'required',
        // 'activity_date' => 'required',
        'price' => 'required'
    ];

    // Don't forget to fill this array
    protected $fillable = [
        'title',
        'body',
        'activity_date',
        'image_path',
        'price'
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

    public function moods()
    {
        return $this->belongsToMany('Mood');
    }
    
    public function categories()
    {
        return $this->belongsToMany('Category');
    }
}

