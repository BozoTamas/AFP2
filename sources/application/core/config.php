<?php

define('URL', 'http://localhost');

//define('PROTOCOL', (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https' : 'http');
//define('PROTOCOL', 'http');
//define('ROOT_URL', PROTOCOL.'://'.$_SERVER['SERVER_NAME'].URL);

define('MAIN_CONTROLLER', 'home');
define('MAIN_VIEW', 'index');

// DB Params
define('DB_HOST', 'localhost'); //'db4free.net');
define('DB_NAME', 'afp2'); //'afp2_link');
define('DB_USER', 'root'); //'afp2_link');
define('DB_PASS', ''); //afp2_link');
define('DB_PORT', 3306);
define('DB_TYPE', 'mysql');
define('DB_CHARSET', 'UTF-8');

// Metadata
define('SITE_NAME', 'Link for you');
define('SITE_DESCRIPTION', '');
define('APP_VERSION', '0.1');
define('APP_LAST_UPDATE', '');
