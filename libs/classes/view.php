
<?php

class view
{
    public function render($view, $error = false)
    {

        require VIEWS . $view;
    }
}

?>