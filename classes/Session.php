<?php 

class Session
{

	public static function exists($name)
	{
		return (isset($_SESSION[$name])) ? true : false;
	}

	public static function put($name,$value)
	{
		return $_SESSION[$name] = $value;
	}

	public static function get($name)
	{
		return $_SESSION[$name];
	}

	public static function delete($name)
	{
		if (self::exists($name)) 
		{
			unset($_SESSION[$name]);
		}
	}

	public static function flash($name, $string = '')
	{
		if (self::exists($name)) 
		{
			$session = self::get($name);
			self::delete($name);
			return $session;
		}
		else
		{
			self::put($name, $string);
		}
	}

	public static function message()
    {	
		$output ="";
        if (self::exists('successMsg')) 
        {
            $output .="<div class='alert alert-success' role='alert'>";
			$output .="<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
					   </button>";
			$output .="<i class='fa fa-info-circle' aria-hidden='true'></i> ";
			$output .="<strong>".self::get('successMsg')."</strong>";		   
			$output .="</div>";
            self::delete('successMsg');
			echo $output;
        }

        if (self::exists('errorMsg')) 
        {
            $output .="<div class='alert alert-danger' role='alert'>";
			$output .="<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
					   </button>";
			foreach (self::get('errorMsg') as $error) {
				$output .="<li>".$error."</li>";		
			}	   
			$output .="</div>";
            self::delete('errorMsg');
			echo $output;
        }
    }
}






?>