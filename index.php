<?php

session_start();

require_once 'config/constants.php';

require_once 'includes/autoloader.php';
spl_autoload_register('myAutoLoader');

require_once 'controllers/login.php';
require_once 'model/loginModel.php';


// Returns a string if the URL has parameters or NULL if not

new Router();
