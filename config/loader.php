<?php
/**
 * Registering an autoloader
 */

use Phalcon\Loader;


$loader = new Loader();
$loader->registerDirs(
    [
        APP_PATH . '/controllers/',
        APP_PATH . '/models/',
    ]
)->register();
