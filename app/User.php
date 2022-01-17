<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'lastName', 'email', 'phone_nummer', 'avatar', 'password'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}