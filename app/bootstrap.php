<?php

use Phalcon\Mvc\View;
use Phalcon\Mvc\Application;
use Phalcon\Di\FactoryDefault;


define('BASE_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR);
const APP_PATH = BASE_PATH . 'app' . DIRECTORY_SEPARATOR;
const CONFIG_PATH = BASE_PATH . 'config' . DIRECTORY_SEPARATOR;
const LOG_PATH = BASE_PATH . 'log' . DIRECTORY_SEPARATOR;

//config set
$config = include_once BASE_PATH.'config/config.php';

//vendor autoload
include_once BASE_PATH . 'vendor/autoload.php';

// Register an autoloader
include_once CONFIG_PATH . 'loader.php';

// Create a DI
$di = new FactoryDefault();

require_once CONFIG_PATH . 'services.php';

// Handle the request
try {
    $application = new Application($di);
    echo $application->handle()->getContent();
} catch (Exception $e) {
    echo "Exception: ", $e->getMessage();
}
