<?php
//d:/websites/feedback
defined ('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined ('ROOT') ? null : define('ROOT','d:'.DS.'websites');

defined ('SITE_ROOT') ? null : define('SITE_ROOT', ROOT.DS.'feedback'.DS);
defined ('WEB_ROOT') ? null : define('WEB_ROOT', '//localhost/feedback/');

defined('DB_SERVER') ? NULL : define ('DB_SERVER', 'localhost');
defined('DB_USER') ? NULL : define ('DB_USER', 'root');
defined('DB_PASS') ? NULL : define ('DB_PASS', '');

include_once 'basic-functions.php';