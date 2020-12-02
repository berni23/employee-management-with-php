<?php

class login extends controller
{

    public function validate()
    {
        $this->model = new LoginModel();
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $validate = $this->model->verifyuser($_POST['username'], $_POST['password']);
            if ($validate) $this->startSession();
            else  header('Location: ' . BASE_URL . '/login/error');
        } else  $this->show();
    }

    public function show()
    {
        $this->view->render('loginView.php');
    }

    public function startSession()
    {
        $_SESSION['userName'] = $_POST['username'];
        $_SESSION['start'] = time();

        // Ending a session in 10 minutes from the starting time.
        $_SESSION['expire'] = $_SESSION['start'] + (10 * 60);
        header('Location: ' . BASE_URL . '/dashboard');
    }

    public function error()
    {
        $error = true;
        $this->view->render('loginView.php', $error);
    }

    public function logout()
    {
        unset($_SESSION['userName']);
        unset($_SESSION['employeeId']);
        session_destroy();
        header('Location: ' . BASE_URL . '/login');
    }
}
