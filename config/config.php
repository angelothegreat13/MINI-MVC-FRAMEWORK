<?php 
require_once 'paths.php';

define('DEBUG', true); //debugging mode switch
define('DEFAULT_CONTROLLER', 'HomeController'); //default controller if there isn't one defined in the url
define('SITE_TITLE', 'ANGELOTHEGREAT MVC'); //if no site title is set, use this site title

//DATABASE CONFIGURATION
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DEFAULT_DB', 'angelomvc');
define('WORKFORCEDB', 'workforcedb');
define('SYSTEMSDB', 'systems');
define('TRAILDB', 'traildb');
define('EVALUATEDB', 'evalautedb');
define('GENDERDB', 'genderdb');
?>