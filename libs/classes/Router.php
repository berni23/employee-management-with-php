

<?php


class Router
{

    public function __construct()
    {
        if (!isset($_SESSION['userName'])) new login();
        else  $this->route();
    }

    private function urlParams(): array
    {
        $url = rtrim($_GET['url'], '/');
        return  explode('/', $url);
    }

    private function getController(): string
    {
        $url = $this->urlParams();
        return 'controllers/' . $url[0] . '.php';
    }
    private function route(): void
    {

        $fileController = $this->getController();

        if (file_exists($fileController)) {
            require_once $fileController;
            $controller = new $url[0];

            if (isset($url[1]))   $controller->{$url[1]}();
        } else {
            // new error()
            // require_once 'controllers/error.php';
            $controller = 'error';
            //  $controller = new messageError();
        }
    }
}
