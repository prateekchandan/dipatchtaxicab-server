<?php

class HomeController extends BaseController {

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
	private function share_user_data(){
		$user = Auth::user();
		View::share('user',$user);
		switch ($user->type) {
			case 'customer':
				View::share('data',Customer::find($user->id));
				break;
			
			case 'driver':
				View::share('data',Driver::find($user->id));
				break;

			case 'business':
				View::share('data',Business::find($user->id));
				break;
			
		}
	}
	public function home()
	{
		$user = Auth::user();
		if($user->type=="")
			return Redirect::route('edit');

		if($user->type=="driver")
		{
			$data = Driver::find($user->id);
			if($data->pic == "" ||$data->cabpic == "" || $data->cab_license == "" ||$data->driving_license == ""){
				return Redirect::route('edit_pic');
			}
		}
		$this->share_user_data();
		return View::make('home');
	}

	public function edit_show()
	{
		$this->share_user_data();
		return View::make('login.edit');
	}

	public function edit(){
		$user  = Auth::user();
		switch ($user->type) {
			case 'customer':
				Customer::where('id','=',$user->id)->delete();
				break;
			case 'driver':
				Driver::where('id','=',$user->id)->delete();
				break;
			case 'business':
				Business::where('id','=',$user->id)->delete();
				break;
			default:
				
				break;
		}

		$user->type = Input::get('type');
		$user->save();

		switch (Input::get('type')) {
			case 'driver':
				$driver = new Driver();
				$driver->id = $user->id;
				$driver->first_name = Input::get('first_name');
				$driver->last_name = Input::get('last_name');
				$driver->phone = Input::get('phone');
				$driver->home_address = Input::get('address');
				$driver->credit_card = Input::get('credit_card');
				$driver->cvv = Input::get('cvv');
				$driver->expiry_date = Input::get('expiry_date');
				$driver->car_type = Input::get('car_type');
				$driver->cab_no = Input::get('cab_no');
				$driver->flag = Input::get('flag');
				$driver->rate = Input::get('rate');
				$driver->hour = Input::get('hour');
				$driver->save();
				break;
			case 'customer':
				$customer = new Customer();
				$customer->id = $user->id;
				$customer->first_name = Input::get('first_name');
				$customer->last_name = Input::get('last_name');
				$customer->phone = Input::get('phone');
				$customer->home_address = Input::get('address');
				$customer->credit_card = Input::get('credit_card');
				$customer->cvv = Input::get('cvv');
				$customer->expiry_date = Input::get('expiry_date');
				$customer->save();
				break;
			case 'business':
				$business = new Business();
				$business->id = $user->id;
				$business->business_name = Input::get('business_name');
				$business->phone = Input::get('phone');
				$business->home_address = Input::get('address');
				$business->credit_card = Input::get('credit_card');
				$business->cvv = Input::get('cvv');
				$business->expiry_date = Input::get('expiry_date');
				$business->save();
				break;
		}
		return Redirect::route('home');
	}

	public function edit_pic_show()
	{
		if(Auth::user()->type != "driver")
			return Redirect::to('home');

		$this->share_user_data();
		return View::make('login.edit_pic');
	}

	public function edit_pic()
	{
		if(Auth::user()->type != "driver")
			return Redirect::to('home');

		$user = Auth::user();
		$driver = Driver::find($user->id);

		$pics = array('pic'=>'','cabpic'=>'' ,'cab_license'=>'','driving_license'=>'');
		$destinationPath = public_path().'/HTML/assets/images/demo';
		foreach ($pics as $pic => $value) {
			if (Input::hasFile($pic) && Input::file($pic)->isValid())
			{
				$fileName = md5($user->id).$pic.".".Input::file($pic)->getClientOriginalExtension();
			    Input::file($pic)->move($destinationPath, $fileName);
			    $driver->$pic = '/HTML/assets/images/demo/'.$fileName;
			}
		}
		$driver->cab_license_expiry_date = Input::get('cab_license_expiry_date');
		$driver->driving_license_expiry_date = Input::get('driving_license_expiry_date');
		$driver->save();
		return Redirect::route('home');
		
	}

}
