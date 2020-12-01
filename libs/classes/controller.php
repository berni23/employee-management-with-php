
<?php

abstract class controller
{

    public function  __construct()
    {

        $this->view =  new view();
    }

    public $view;

    // abstract static function show();
}
