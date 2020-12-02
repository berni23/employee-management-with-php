

<?php
class employee extends controller

{

    public function updateEmployees()
    {
        $id = $_SESSION['employeeId'];


        echo $_POST['name'];

        $data =
            [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'age' => $_POST['age'],
                'gender' => $_POST['gender'],
                'lastName' => $_POST['lastName'],
                'streetAddress' => $_POST['streetAddress'],
                'city' => $_POST['city'],
                'state' => $_POST['state'],
                'postalCode' => $_POST['postalCode'],
                'phoneNumber' => $_POST['phoneNumber']

            ];
        $this->model = new employeeModel();
        $employee = $this->model->updateById($id, $data);
        $this->show(array('message' => ' employee updated successfully', 'status' => '200'));
    }

    function setId()
    {
        if (isset($_POST['id'])) {

            $_SESSION['employeeId'] = $_POST['id'];
            echo 'success';
        } else echo 'error';

        //  header("Location:" . BASE_URL . "/failure/notFound");
    }
    function show($msg = false)
    {

        if (isset($_SESSION['employeeId'])) {

            $id = $_SESSION['employeeId'];
            $this->model = new employeeModel();
            $employee = $this->model->getById($id);

            require 'views/employeeView.php';
        } else  header("Location:"  . BASE_URL . "/failure/notFound");
    }
}
