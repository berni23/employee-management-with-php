

<?php
class employee extends controller

{

    function setId()
    {
        if (isset($_POST['id'])) {

            $_SESSION['employeeId'] = $_POST['id'];
            echo 'success';
        } else echo 'error';

        //  header("Location:" . BASE_URL . "/failure/notFound");
    }
    function show()
    {

        if (isset($_SESSION['employeeId'])) {

            $id = $_SESSION['employeeId'];

            $this->model = new employeeModel();

            $employee = $this->model->getById($id);

            //  echo json_encode($employee);

            // $employee(name->Bernat,la)


            require 'views/employeeView.php';

            // $this->view->render('employeeView.php');
        } else  header("Location:"  . BASE_URL . "/failure/notFound");
    }
}
