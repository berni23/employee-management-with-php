<?php





require_once 'config/constants.php';

// require_once 'includes/autoloader.php';
// spl_autoload_register('myAutoLoader');

require_once  CLASSES . '/Database.php';
require_once  CLASSES . '/controller.php';
require_once  CLASSES . '/Model.php';
require_once  CLASSES . '/view.php';

require_once 'models/loginModel.php';
require_once 'models/dashboardModel.php';
require_once 'models/employeeModel.php';


require_once  CLASSES . '/Router.php';

new Router();
