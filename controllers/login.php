<?php

class login extends controller
{


    public $username = "admin";
    public $password = "123456";


    public function __construct()
    {
        parent::__construct();

        if (isset($_POST['username']) && isset($_POST['password'])) {

            $validate = $this->validate($_POST['username'], $_POST['password']);

            if ($validate) echo 'successful';

            else echo 'failed';
        } else  $this->view->render('login.php');
    }

    // private function login($username, $password)
    // {

    //     // $validate = $this->validate($username, $password);
    // }
    private function validate($username, $password)
    {

        return ($username == $this->username && $password == $this->password);

        //$model = new loginModel();
    }
}
