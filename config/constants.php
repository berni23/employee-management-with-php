


<?php

$root = getcwd();

define('BASEPATH', $root);

define('VIEWS', BASEPATH . '/views/');

define('CLASSES', BASEPATH, '/libs/classes');

define('URL', "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
