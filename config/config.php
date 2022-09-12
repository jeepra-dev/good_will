<?php
//root folder
define('REQUEST_SCHEME', filter_input(INPUT_SERVER, 'REQUEST_SCHEME', FILTER_SANITIZE_STRING));
define('SERVER_NAME', filter_input(INPUT_SERVER, 'SERVER_NAME', FILTER_SANITIZE_STRING));
define('SCRIPT_NAME', filter_input(INPUT_SERVER, 'SCRIPT_NAME', FILTER_SANITIZE_STRING));
define('URL', REQUEST_SCHEME.'://'.SERVER_NAME.dirname(SCRIPT_NAME));
define('DIR_CONTROLLER', 'Controller');
define('CONTROLLER_PATH', ROOT_FOLDER . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . DIR_CONTROLLER . DIRECTORY_SEPARATOR);

//database config
define('DB_SERVER_NAME', 'localhost');
define('DB_NAME', 'good_will');
define('DB_USERNAME', 'toto');
define('DB_PASSWORD', 'toto');