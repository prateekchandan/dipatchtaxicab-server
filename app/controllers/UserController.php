<?php

class UserController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function show_login()
	{
		return View::make('login.page');
	}

	public function login(){
		if(Input::has('email') && Input::has('password')){
			if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
			{
			    return Error::success("Successful to Login",User::find(Auth::user()->id));
			}else{
				return Error::make('Invalid email or password');
			}
		}else{
			return Error::make('No email or password');
		}
	}

	public function register(){
		if(Input::has('email') && Input::has('password')){
			$user = User::where('email','=',Input::get('email'))->first();
			if(!is_null($user)){
				return Error::make('User Already Exists');
			}

			$user = new User();
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->save();
			Auth::login($user);
			return Error::success("Successful to Register",User::find(Auth::user()->id));
		}else{
			return Error::make('No email or password');
		}
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::route('login');
	}

}
