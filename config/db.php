<?php

class db
{

    function __construct()
    {
        $this->DB_NAME = getenv('DB_NAME');
        $this->DB_PASSWORD = getenv('DB_PASSWORD');
        $this->DB_USERNAME = getenv('DB_USERNAME');
        $this->DB_SERVER_NAME = getenv('DB_SERVER_NAME');
    }

    public   function makeConn()
    {
        $conn = mysqli_connect($this->DB_NAME, $this->DB_USERNAME, $this->DB_PASSWORD, $this->DB_SERVER_NAME);
        return $conn;
    }
}
