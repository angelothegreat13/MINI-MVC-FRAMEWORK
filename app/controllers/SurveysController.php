<?php 

class SurveysController extends Controller
{
    public function __construct($controller,$action)
    {
        parent::__construct($controller,$action);
        $this -> loadModel('Survey');
        $this -> view -> setLayout('master');
    }

    public function index()
    {    
        echo "this is survey Home";
    }

    public function create()
    { 
        $this -> survey -> setSurveyForm();
        $data = [
            'questions' => $this -> survey -> questions(),
            'answers' => $this -> survey -> answers()
        ];
        
        $this -> view -> load('surveys/create',$data);
    }
    
    

    
}

?>