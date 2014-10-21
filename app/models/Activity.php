<?php

class Activity extends BaseModel
{
    const DATE_FORMAT = 'l, jS \\of F Y g:i A';

    // Add your validation rules here
    public static $rules = [
        'title' => 'required|max:255',
        'body' => 'required',
        // 'activity_date' => 'required',
        // 'price' => 'required'
    ];

    // Don't forget to fill this array
    protected $fillable = [
        'title',
        'body',
        'activity_date',
        'image_path',
        'price'
    ];

    protected $table = 'activities';
}

