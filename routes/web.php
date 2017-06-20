<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});
 
$app->get('/api/v1/userinfo/', function() use ($app) {
	$result= app('db')->select("SELECT * FROM user_information");
	
	return $result;
});
$app->get('book','BookController@index');

// $app->get('/', function() use ($app) {
//     return "Lumen RESTful API By CoderExample (https://coderexample.com)";
// });
 
// $app->group(['prefix' => 'api/v1','namespace' => 'App\Http\Controllers'], function($app)
// {
//     $app->get('UserInfo','UserInfoController@index');
  
//     $app->get('UserInfo/{id}','UserInfoController@getUserInfo');
      
//     $app->post('UserInfo','UserInfoController@createUserInfo');
      
//     $app->put('UserInfo/{id}','UserInfoController@updateUserInfo');
      
//     $app->delete('UserInfo/{id}','UserInfoController@deleteUserInfo');
// });

// $app->get('/', function() use ($app) {
//     return "Lumen RESTful API By CoderExample (https://coderexample.com)";
// });
 
// $app->group(['prefix' => 'api/v1','namespace' => 'App\Http\Controllers'], function($app)
// {
//     $app->get('book','BookController@index');
  
//     $app->get('book/{id}','BookController@getbook');
      
//     $app->post('book','BookController@createBook');
      
//     $app->put('book/{id}','BookController@updateBook');
      
//     $app->delete('book/{id}','BookController@deleteBook');
// });