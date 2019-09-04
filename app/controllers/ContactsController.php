<?php 

class ContactsController extends Controller
{
    public function __construct($controller,$action)
    {
        parent::__construct($controller,$action);
        $this -> loadModel('Contact');
        $this -> view -> setLayout('master');
    }

    public function index()
    {    
        $this -> view -> load('contacts/index',['contacts' => $this -> contact -> lists()]);
    }

    public function create()
    {   
        Redirect::to('contacts/title/what-is-the-best-to-update');
    }

    public function title($name = null,$meaning = null)
    {
        echo $name .'<br>';
        echo $meaning;
    }

    
}

?>