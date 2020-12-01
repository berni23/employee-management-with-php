<?php

class login extends controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new LoginModel();

        if (isset($_POST['username']) && isset($_POST['password'])) {
            $validate = $this->validate($_POST['username'], $_POST['password']);
            if ($validate) {
                $_SESSION['userName'] = $_POST['username'];

                header('Location: ' . BASE_URL . '/dashboard/show');
            }
        } else  $this->view->render('loginView.php');
    }

    private function validate($username, $password)
    {
        return $this->model->verifyuser($username, $password);
    }
}
