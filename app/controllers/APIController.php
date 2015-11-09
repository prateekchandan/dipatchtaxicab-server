<?php
class APIController extends BaseController {

	public function getCustomer($id)
	{
		$customer = Customer::find($id);
		if($customer==null){
			return Error::make("No Customer Found");
		}else{
			return Error::success("Customer found",$customer->toArray());
		}
	}

	public function getDriver($id)
	{
		$driver = Driver::find($id);
		if($driver==null){
			return Error::make("No Driver Found");
		}else{
			return Error::success("Driver found",$driver->toArray());
		}
	}

	public function getBusiness($id)
	{
		$business = Business::find($id);
		if($business==null){
			return Error::make("No Business Found");
		}else{
			return Error::success("Business found",$business->toArray());
		}
	}

	public function getUser($id)
	{
		$user = User::find($id);
		if(is_null($user)){
			return Error::make("Invalid User");
		}
		return Error::success("User Details",$user->toArray());
	}
}