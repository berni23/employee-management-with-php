



<?php


abstract class Model
{

    public $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    /*
    abstract public function getById($id);

    abstract public function  setById($id);

    abstract public function someMethod3(): string;
    */
}
