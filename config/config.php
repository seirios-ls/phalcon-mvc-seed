<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);
ini_set('display_errors', '1');
ini_set('log_errors', '0');

return new \Phalcon\Config([
    'version' => '0.1',
    'logger' => [
        'switch' => true,
        'file' => LOG_PATH . 'debug.log',
    ],
    'database' => [
        'adapter' => 'Mysql',
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => 'root',
        'dbname' => 'dbname',
        'charset' => 'utf8',
        'options' => [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4',
        ],
    ],
    'redis' => [
        'host' => 'redis',
        'port' => '6379',
        'scheme' => 'tcp',
        'database' => '11',
    ],
]);
