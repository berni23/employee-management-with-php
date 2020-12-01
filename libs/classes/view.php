
<?php

class view
{
    public function render($view)
    {
        require VIEWS . $view;
    }
}

?>