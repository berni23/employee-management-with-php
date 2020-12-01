
<?php
require_once "vendor/autoload.php";

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
$root = getcwd();


$uri = $_SERVER['REQUEST_URI'];

if (isset($uri) && $uri !== null) {
    $uri = substr($uri, 1);
    $uri = explode('/', $uri);
    $uri = "http://" . $_SERVER['HTTP_HOST'] . "/" . $uri[0] . "/" . $uri[1];
} else {
    $uri = null;
}

define("BASE_URL", $uri);

define('BASEPATH', $root);
define('VIEWS', BASEPATH . '/views/');
define('CLASSES', BASEPATH . '/libs/classes');
define('URL', "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
