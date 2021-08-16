<?php

use Phalcon\Mvc\View;
use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\View\Engine\Volt;
use Phalcon\Session\Adapter\Files;
use Phalcon\Mvc\Url as UrlProvider;
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;

/**
 * @var $di FactoryDefault
 */
//Sets the config
$di->setShared('config', function () use ($config) {
    return $config;
});

// Setup a base URI so that all generated URIs include the "tutorial" folder
$di->setShared('url', function () {
    $url = new UrlProvider();
    $url->setBaseUri('/');
    return $url;
});

// Set the database service
$di->setShared('db', function () use ($config) {
    return new DbAdapter($config->database->toArray());
});

// Register Volt as a service
$di->set(
    "voltService",
    function ($view, $di) {
        $volt = new Volt($view, $di);

        $volt->setOptions(
            [
                "compiledPath" => APP_PATH . '/views/',
                "compiledExtension" => ".compiled",
            ]
        );

        return $volt;
    }
);

// Setting up the view component
$di->setShared('view', function () {
    $view = new View();
    $view->setViewsDir(APP_PATH . 'views/');
    $view->registerEngines([
        ".volt" => "voltService"
    ]);
    return $view;
});

$di->setShared(
    "session",
    function () {
        $session = new Files();

        $session->start();

        return $session;
    }
);

