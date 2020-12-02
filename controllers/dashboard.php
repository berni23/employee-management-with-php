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
        echo $this->model->insertEmployee($data);

    }

    public function updateEmployees()
    {

    }

    public function deleteEmployees()
    {

    }
}
