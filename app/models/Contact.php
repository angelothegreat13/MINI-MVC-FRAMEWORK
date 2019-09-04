<?php 

class Contact extends Model
{

	public function __construct()
	{
		parent::__construct();
	}
	
	public function lists()
	{
		return $this -> _db -> all('contacts');
	}

	public function create($fields = array())
    {
        if (!$this -> _db -> insert('contacts',$fields)) {
            throw new Exception("There was a problem in Creating Contacts");
        }
    }
}


?>