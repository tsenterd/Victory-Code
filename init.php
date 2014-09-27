<?php

session_start();

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

$GLOBALS['config'] = array(
    'mysql' => array(
        'host' => 'localhost',
        'username' => 'root',
        'password' => 'root',
        'db' => 'competition'
    ),
    'remember' => array(
        'cookie_name' => 'hash',
        'cookie_expiry' => 604800
    ),
    'session' => array(
        'session_name' => 'user'
    )
);

spl_autoload_register(function($class) {
    require_once ('classes/' . $class . '.php');
});

require_once('../functions/sanitize.php');