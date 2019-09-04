<?php 

class View
{
    protected $_head,
              $_body,
              $_footer,
              $_siteTitle = SITE_TITLE,
              $_outputBuffer,
              $_layout;

    
    public function load($viewName,$data = [])
    {
        $viewArray = explode('/',$viewName);
        $viewString = implode(DS,$viewArray);                                                        
        if (file_exists(ROOT.DS.'app'.DS.'views'.DS.$viewString.'.php')) 
        {   
            include(ROOT.DS.'app'.DS.'views'.DS.$viewString.'.php');
            include(ROOT.DS.'app'.DS.'views'.DS.'layouts'.DS.$this -> _layout . '.php');
        }
        else {
            die('The view\"'.$viewName.'\"does not exists');
        }
    }

    public function content($type)
    {
        switch ($type) {
            case 'head':
                return $this -> _head;
            break;

            case 'body':
                return $this -> _body;                
            break;

            case 'footer':
                return $this -> _footer;                
            break;
            
            default:
                return false;
            break;
        }
    }

    public function start($type)
    {
        $this -> _outputBuffer = $type;
        ob_start();
    }

    public function end()
    {
        if ($this -> _outputBuffer == 'head') {
            $this -> _head = ob_get_clean();
        }
        elseif ($this -> _outputBuffer == 'body') {
            $this -> _body = ob_get_clean();
        }
        elseif ($this -> _outputBuffer == 'footer') {
            $this -> _footer = ob_get_clean();
        }
        else {
            die("You must first run the start method");
        }
    }

    public function setSiteTitle($title)
    {
        $this -> _siteTitle = $title;
    }

    public function siteTitle()
    {
        return $this -> _siteTitle;
    }

    public function setLayout($path)
    {
        $this -> _layout = $path;
    }

}


?>