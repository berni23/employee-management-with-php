<?php


class dashboard extends controller
{


    public function __construct()
    {
        parent::__construct();
        $this->model = new dashboardModel();
    }
    public function show()
    {
        $this->view->render('dashboardView.php');
    }

    public function getAllEmployees()
    {
        echo json_encode($this->model->getAll());
    }
}
