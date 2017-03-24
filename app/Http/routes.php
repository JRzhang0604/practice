<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::group(['prefix'=>'server/v1'],function(){
//    Route::resource('lesson','LessonController');
//});

$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {

    $api->group(['namespace' => 'App\Api\Controllers'], function ($api) {

            $api->get('lesson','LessonController@index');
            $api->post('user/login','AuthController@authenticate');
            $api->post('user/register','AuthController@register');
            $api->post('user/me','AuthController@getAuthenticatedUser');
            $api->group(['middleware' => 'jwt.auth'],function($api){
                // 业务逻辑
            });
    });
});
