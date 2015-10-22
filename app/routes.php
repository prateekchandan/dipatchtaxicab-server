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
	Route::get('/',array('as'=>'home','uses'=>'HomeController@home'));
	Route::get('edit',array('as'=>'edit','uses'=>'HomeController@edit_show'));
	Route::post('edit',array('as'=>'edit','uses'=>'HomeController@edit'));
	Route::get('edit_pic',array('as'=>'edit_pic','uses'=>'HomeController@edit_pic_show'));
	Route::post('edit_pic',array('as'=>'edit_pic','uses'=>'HomeController@edit_pic'));
	Route::any('logout',array('as'=>'logout','uses'=>'UserController@logout'));
});


Route::group(array('before'=>'guest'),function(){
	Route::get('login',array('uses'=>'UserController@show_login'));
	Route::post('login',array('as'=>'login','uses'=>'UserController@login'));
	Route::post('register',array('as'=>'register','uses'=>'UserController@register'));
});

Route::get('test',function(){
	Mail::send('emails.auth.authenticate', array('key' => 'value'), function($message)
	{
	    $message->to('prateekchandan5545@gmail.com', 'Prateek')->subject('Welcome!');
	});
});