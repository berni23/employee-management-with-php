
<?php


class Router
{
    private $url;
    public function __construct()
    {
        session_start();
        //unset($_SESSION['userName']);
        if (!isset($_SESSION['userName'])) new login();
        else  $this->route();
    }

    private function urlParams()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        $this->url = $url;
    }

    private function getController(): string
    {
        $this->urlParams();
        return 'controllers/' . $this->url[0] . '.php';
    }
    private function route(): void
    {

        $fileController = $this->getController();
        if (file_exists($fileController)) {
            require_once $fileController;
            $controller = new $this->url[0];
            if (isset($this->url[1]))   $controller->{$this->url[1]}();
        } else {
            // new error()
            // require_once 'controllers/error.php';
            $controller = 'error';
            //  $controller = new messageError();
        }
    }
}
