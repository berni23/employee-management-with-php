<?php

class login extends controller
{


    public function __construct()
    {
        parent::__construct();

        if (isset($_POST['username']) && isset($_POST['password'])) {
            $validate = $this->validate($_POST['username'], $_POST['password']);
            if ($validate) {
                header('Location:' . $_SERVER['REQUEST_URI'] . '/');
            } else  $this->view->render('login.php');
        }
    }

    // private function login($username, $password)
    // {
    // }
    private function validate($username, $password)
    {
        $loginModel = new LoginModel();
        return $loginModel->verifyuser($username, $password);
    }
}
