<?php

class Mood extends BaseModel {

    protected $table = 'moods';
    // Add your validation rules here
    public static $rules = [
        'name' => 'required|max:50'
    ];

    // Don't forget to fill this array
    protected $fillable = ['name'];

    public function activities()
    {
        return $this->hasMany('Activity');
    }
}