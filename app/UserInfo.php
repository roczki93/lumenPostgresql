<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{

     protected $fillable = ['first_name', 'last_name', 'email', 'gender', 'city', 'street', 'latitude', 'longitude'];

}
?>