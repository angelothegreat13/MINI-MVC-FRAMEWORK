<?php 

class Model
{   

    protected $_db;
             
    public function __construct($dbname = DEFAULT_DB)
    {
        $this -> _db = DB::instance($dbname);
    }

}

?>