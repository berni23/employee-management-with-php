
<?php


class Router
{
    private $url;
    public function __construct()
    {
        session_start();
        sessionHelper::manageTimer();
        $this->urlParams();
        if (!strlen($this->url[0]) || (!isset($_SESSION['userName']) && (($this->url[0]) !== 'login'))) {
            header('Location: ' . BASE_URL . '/login');
        } else  $this->route();
    }


    private function urlParams(): void
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        $this->url = $url;
    }

    private function route(): void
    {
        $fileController = 'controllers/' . $this->url[0] . '.php';
        if (file_exists($fileController)) {
            require_once $fileController;
            $controller = new $this->url[0];
            if (isset($this->url[1]))  $controller->{$this->url[1]}();
            else $controller->{'show'}();
        } else  $this->notFound();
    }
    private function notFound(): void
    {
        header('Location: ' . BASE_URL . '/failure/notFound');
    }
}
