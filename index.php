<?php 
    defined('DS') ? NULL : define('DS', DIRECTORY_SEPARATOR); 
    defined('ROOT') ? NULL : define('ROOT', dirname(__FILE__)); 
    require_once(ROOT.DS.'core'.DS.'Bootstrap.php');
    session_start();

    $router = new Router();
    $router -> route();
    $router -> dispatch();
?>


