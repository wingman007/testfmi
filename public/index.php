<?php
// error_reporting(E_ALL|E_STRICT);
// error_reporting(E_ALL^E_NOTICE);
ini_set('display_errors', 1);
// PHP_INI_ALL display_errors
// An example that sets the value of these directives to Off in php.ini. For additional details, read the manual section titled How to change configuration settings. 
// die('I have set the configuration');
  /**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));

// Setup autoloading
include 'init_autoloader.php';

// Run the application!
Zend\Mvc\Application::init(include 'config/application.config.php')->run();
