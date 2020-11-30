<?php

session_start();

require_once 'config/constants.php';

require_once 'includes/autoloader.php';
spl_autoload_register('myAutoLoader');

require_once 'models/loginModel.php';
require_once 'controllers/login.php';

new Router();
