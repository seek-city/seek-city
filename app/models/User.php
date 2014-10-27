<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    // Add your validation rules here
    public static $rules = [
        'username' => 'required|max:50',
        'password' => 'required',
        'email' => 'required',
    ];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

    protected $fillable = array('username', 'password', 'email', 'first_name', 'last_name', 'image_path');

    
    /**
     * MUTATOR FOR PASSWORD ATTRIBUTES
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
    
    /**
     * MUTATOR FOR EMAIL ATTRIBUTES
     */
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);
    }

    /**
     * Find activities related to user.
     */
    public function activities()
    {
        return $this->hasMany('Activity');
    }
    
    public function getFirstName()
    {
        return ucfirst($this->first_name);
    }
    
    public function getLastName()
    {
        return ucfirst($this->last_name);
    }

}
