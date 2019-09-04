<?php 

class Token
{

	public static function generate()
	{
		return Session::put(Config::get('session/token_name'), md5(uniqid()));
	}

	public static function check($token) //check if the token exist in the session
	{
		$tokenName = Config::get('session/token_name');

		if (Session::exists($tokenName) && $token === Session::get($tokenName)) 
		{
			Session::delete($tokenName);
			return true; //return this if the condition was meet	 
		}
		return false;
	}




}





?>