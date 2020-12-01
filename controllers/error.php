


<?php


class error extends controller
{

    public function __construct($error)
    {
        parent::__construct();
        $this->show();
    }

    protected function notFound()
    {

        $error = 'error404';
        $this->show();
    }

    protected function serverError()
    {

        $error = 'error500';
        $this->show();
    }

    protected function show()
    {
        $this->view->render('errorView.php');
    }
}
