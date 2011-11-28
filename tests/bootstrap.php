<?php
define('DS', DIRECTORY_SEPARATOR);
// Define path to application directory
defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));
// Define path to configs directory
defined('CONFIG_PATH') || define('CONFIG_PATH', realpath(dirname(__FILE__) . '/../application/Core/configs'));
// Define path to root directory
defined('ROOT_PATH') || define('ROOT_PATH', realpath(dirname(dirname(__FILE__))));
// Define application environment
define('APPLICATION_ENV', 'testing');


// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH),
    realpath(APPLICATION_PATH . '/../library'), 
    get_include_path()
    ))
);

require_once 'Zend/Application.php';
$application = new Zend_Application('testing', APPLICATION_PATH . '/Core/configs/application.ini');

Zend_Session::$_unitTestEnabled = true; 
