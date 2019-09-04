<?php 

class Controller extends Application
{
    protected $_controller,
              $_action;
    public $view;


    public function __construct($controller,$action)
    {
        parent::__construct(); //this will run parent __construct method
        
        $this -> _controller = $controller;
        $this -> _action = $action;
        $this -> view = new View;
    }

    public function loadModel($model)
    {
        if (class_exists($model)) {
            $this -> {strtolower($model)} = new $model(strtolower($model));
        }
    }

}

?>