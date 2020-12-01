
<?php


class Router
{
    private $url;
    public function __construct()
    {
        session_start();
        $this->urlParams();
        // unset($_SESSION['userName']);
        if (!isset($_SESSION['userName']) && (($this->url[0]) !== 'login')) {

            // echo

            //  echo ($this->url[0]);

            // new login();

            // require_once 'controllers/login.php';


            echo ($this->url[0]);
            if (!isset($_SESSION['hey'])); {
                header('Location: ' . BASE_URL . '/login/show');

                $_SESSION['hey'] = true;
            }
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

        echo json_encode($this->url);
        $fileController = 'controllers/' . $this->url[0] . '.php';
        if (file_exists($fileController)) {
            require_once $fileController;
            $controller = new $this->url[0];
            if (isset($this->url[1]))

                try {
                    $controller->{$this->url[1]}();
                } catch (Exception $e) {

                    $this->notFound();
                }
            else  $this->notFound();
        }
    }

    private function notFound(): void
    {
        header('Location: ' . BASE_URL . '/error/notFound');
    }
}
