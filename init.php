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
        'session_name' => 'user',
        'token_name' => 'token'
    )
);

/*spl_autoload_register(function($class) {
    require_once ('classes/' . $class . '.php');
});*/


require_once('classes/input.php');
require_once('classes/Hash.php');
require_once('classes/cookie.php');
require_once('classes/DB.php');
require_once('classes/redirect.php');
require_once('classes/session.php');
require_once('classes/token.php');
require_once('classes/User.php');
require_once('classes/Validate.php');
require_once('Config.php');
require_once('functions/sanitize.php');