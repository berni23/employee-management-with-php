


<?php


require_once realpath(__DIR__ . "/vendor/autoload.php");

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);

// environtmental vars
$dotenv->load();

$root = getcwd();

define('BASEPATH', $root);

define('VIEWS', BASEPATH . '/views/');

define('CLASSES', BASEPATH, '/libs/classes');

define('URL', "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
