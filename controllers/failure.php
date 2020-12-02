


<?php


class failure extends controller
{

    public function notFound()
    {
        $this->view->render('errorView.php', 'error404');
    }

    public function serverError()
    {

        $this->view->render('errorView.php', 'error500');
    }

    public function show()
    {
        $this->view->render('errorView.php');
    }
}
