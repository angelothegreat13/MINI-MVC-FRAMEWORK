<?php 

class UsersController extends Controller
{

    public function __construct($controller,$action)
    {
        parent::__construct($controller,$action);
        $this -> view -> setLayout('master');
    }

    public function index()
    {
        $this -> view -> load('tools/index');
    }

    public function first()
    {
        $this -> view -> load('tools/first');
    }

    public function second()
    {
        $this -> view -> load('tools/second');
    }

    public function third()
    {
        $this -> view -> load('tools/third');
    }

}   

?>



