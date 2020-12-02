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
}
