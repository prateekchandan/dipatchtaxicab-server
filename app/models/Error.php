<?php
/**
* 
*/
class Error
{
	
	public static function make($message="Error"){
		$contents= array('error' => 1, 'message' => $message);
		$response = Response::make($contents, 200,array('statusText'=>$message));
		return $response;
	}

	public static function success($message="Success",$data=array()){

		$contents= array('error' => 0, 'message' => $message);
		$contents = array_merge($contents,$data);
		$response = Response::make($contents, 200,array('statusText'=>$message));
		return $response;
	}
}

?>