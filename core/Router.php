<?php 

class Router
{
    private $_controller = DEFAULT_CONTROLLER,
            $_action = 'index',
            $_params = array();

    public function route()
    {   
        $url = (isset($_SERVER['PATH_INFO'])) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [] ;

        if (isset($url[0]) && $url[0] != '' ) {
            $this -> _controller = ucwords($url[0].'Controller');
            $this -> _action = $url[0];
        }

        array_shift($url);
        
        $this -> _action = (isset($url[0]) && $url[0] != '') ? $url[0] : 'index';
        array_shift($url);

        $this -> _params = $url;
    }

    public function dispatch()
    {
        if (class_exists($this -> _controller)) 
        {
             // instantiate class
            $dispatch = new $this -> _controller($this -> _controller,$this -> _action);
            if (method_exists($this -> _controller,$this -> _action)) {
                call_user_func_array([$dispatch,$this -> _action],$this -> _params);
            }
            else {
                Redirect::to(404);
            }
        }
        else{
            Redirect::to(404);
        }
    }


}

?>