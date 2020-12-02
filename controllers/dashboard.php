<?php


class dashboard extends controller
{

    public function show()
    {
        $this->view->render('dashboardView.php');
    }

    public function getAllEmployees()
    {
        $this->model = new dashboardModel();
        echo json_encode($this->model->getAll());
    }

    public function insertEmployees()
    {
        $data = json_decode(file_get_contents('php://input'), true);
        $this->model = new dashboardModel();
        if ($this->model->insertEmployee($data)) echo json_encode(array('message' => ' employee inserted successfully', 'status' => 200));
        else echo json_encode(array('message' => 'error, unable to insert employee', 'status' => 400));
    }


    public function deleteEmployees()
    {
        $data = json_decode(file_get_contents('php://input'), true);
        $this->model = new dashboardModel();
        if ($this->model->deleteEmployee($data['id']))  echo json_encode(array('message' => 'delete successful', 'status' => 200));
        else echo json_encode(array('message' => 'error, unable to delete', 'status' => 400));
    }
}
