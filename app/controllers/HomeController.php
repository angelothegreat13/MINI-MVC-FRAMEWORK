<?php 

class HomeController extends Controller
{
    public function __construct($controller,$action)
    {
        parent::__construct($controller,$action);
        $this -> loadModel('Contact');
        $this -> view -> setLayout('master');
    }

    public function index()
    {   
        $this -> view -> load('home/index');
    }


   
    
}

?>