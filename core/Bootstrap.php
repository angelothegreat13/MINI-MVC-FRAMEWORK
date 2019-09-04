<?php 

// Load configuration and helper function
require_once(ROOT.DS.'config'.DS.'config.php');
require_once(HELPERS.DS.'functions.php');


// Autoload the classes
function autoload($className)
{
    if (file_exists(ROOT.DS.'core'.DS.$className.'.php')) {
        require_once(ROOT.DS.'core'.DS.$className.'.php');
    }
    elseif (file_exists(ROOT.DS.'app'.DS.'controllers'.DS.$className.'.php')) {
        require_once(ROOT.DS.'app'.DS.'controllers'.DS.$className.'.php');
    }
    elseif (file_exists(ROOT.DS.'app'.DS.'models'.DS.$className.'.php')) {
        require_once(ROOT.DS.'app'.DS.'models'.DS.$className.'.php');
    }
    elseif (file_exists(ROOT.DS.'classes'.DS.$className.'.php')) {
        require_once(ROOT.DS.'classes'.DS.$className.'.php');
    }
}

spl_autoload_register('autoload');





?>