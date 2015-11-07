<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::group(array('before'=>'user'),function(){
	Route::get('edit',array('as'=>'edit','uses'=>'HomeController@edit_show'));
	Route::post('edit',array('as'=>'edit','uses'=>'HomeController@edit'));
	
	Route::any('logout',array('as'=>'logout','uses'=>'UserController@logout'));
	Route::any('resend',array('as'=>'resend','uses'=>'UserController@send_activation_mail'));
	Route::any('activation',array('as'=>'activate_error','uses'=>'UserController@activate_error'));

	Route::group(array('before'=>'activate'),function(){
		Route::get('/',array('as'=>'home','uses'=>'HomeController@home'));
		Route::get('edit_pic',array('as'=>'edit_pic','uses'=>'HomeController@edit_pic_show'));
		Route::post('edit_pic',array('as'=>'edit_pic','uses'=>'HomeController@edit_pic'));
	});
});


Route::group(array('before'=>'guest'),function(){
	Route::get('login',array('uses'=>'UserController@show_login'));
	Route::post('login',array('as'=>'login','uses'=>'UserController@login'));
	Route::post('register',array('as'=>'register','uses'=>'UserController@register'));
});

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is all the routes which will help the laravel application to run.
|
*/
Route::group(array("prefix"=>"api"),function(){
	Route::post('login',array('uses'=>'UserController@login'));
	Route::post('register',array('uses'=>'UserController@register'));
	Route::get('customer/{id}',array('uses'=>'APIController@getCustomer'));
	Route::get('driver/{id}',array('uses'=>'APIController@getDriver'));
	Route::get('business/{id}',array('uses'=>'APIController@getBusiness'));

	Route::any('{e1?}/{e2?}/{e3?}/{e4?}/{e5?}/{e6?}/{e7?}/{e8?}',function(){return Error::make("Invalid URL. Page don't exists");});
});

Route::controller('password', 'RemindersController');

Route::get('activate/{id}',array('uses'=>'UserController@activate'));

