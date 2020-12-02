<?php
class employee extends controller
{
    public function updateEmployees()
    {
        $id = $_SESSION['employeeId'];
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
                'phoneNumber' => $_POST['phoneNumber'],
                'profileImg' => $_POST['profileImg']
            ];
        $this->model = new employeeModel();
        if ($this->model->updateById($id, $data)) $this->show(array('message' => 'employee updated successfully', 'status' => 200));
        else  $this->show(array('message' => 'unable to update', 'status' => 400));
    }

    function setId()
    {
        if (isset($_POST['id'])) {
            $_SESSION['employeeId'] = $_POST['id'];
            echo 'success';
        } else echo 'error';
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
