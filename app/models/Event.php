<?php

class Event extends BaseModel
{
    // Add your validation rules here
    public static $rules = [
        'title' => 'required|max:255',
        'body' => 'required',
        'event_date' => 'required',
        'price' => 'required'
    ];

    // Don't forget to fill this array
    protected $fillable = ['title', 'body', 'event_date', 'image_path', 'price'];

    protected $table = 'events';
}