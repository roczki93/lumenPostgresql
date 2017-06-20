<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    /**
     * The attributes that are mass assignable.
     * first_name, last_name, email, gender, city, street, latitude, longitude
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'gender', 'city', 'street', 'latitude', 'longitude',
    ];

}
?>