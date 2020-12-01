<?php

class login extends controller
{

    public function validate()
    {
        $this->model = new LoginModel();
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $validate = $this->model->verifyuser($_POST['username'], $_POST['password']);
            if ($validate) $this->logIn();
            else  header('Location: ' . BASE_URL . '/login/error');
        } else  $this->show();
    }

    public function show()
    {
        $this->view->render('loginView.php');
    }

    public function logIn()
    {
        $_SESSION['userName'] = $_POST['username'];
        header('Location: ' . BASE_URL . '/dashboard/show');
    }

    public function error()
    {

        $error = true;
        $this->show();
    }
}
