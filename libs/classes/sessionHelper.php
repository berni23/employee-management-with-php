

<?php

class sessionHelper
{

    static function manageTimer()
    {
        if (isset($_SESSION['expire']) && time() > $_SESSION['expire'])   header('Location: ' . BASE_URL . 'login/logout');
    }
}
