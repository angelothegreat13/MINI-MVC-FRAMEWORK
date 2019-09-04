<?php 

class Redirect 
{   

    public static function to($location = null)
    {
        if ($location) 
        {
            if (is_numeric($location)) 
            {
                switch ($location) 
                {
                    case 403:
                        header('HTTP/1.0 403 Not Found');
                        include (ROOT.DS.'app'.DS.'views'.DS.'layouts'.DS.'errors'.DS.$location.'.php');
                        exit();
                    break;

                    case 404:
                        header('HTTP/1.0 404 Not Found');
                        include (ROOT.DS.'app'.DS.'views'.DS.'layouts'.DS.'errors'.DS.$location.'.php');
                        exit();
                    break;
                }

            }

            header('Location: '.SITE_ROOT.$location);
            exit();
        }
    }

}






?>