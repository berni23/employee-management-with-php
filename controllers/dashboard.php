<?php


class dashboard extends controller
{

    public function __construct()
    {
        parent::__construct();
        $this->model = new dashboardModel();
    }
    protected function show()
    {
        $this->view->render('dashboardView.php');
    }

    protected function getAllEmployees()
    {
        echo json_encode($this->model->getAll());
    }
}
