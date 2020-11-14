<?php
require_once "employeeManager.php";
session_start();

//Check if post exist

if (isset($_POST)) {
    //   print_r($_POST);
    if (isset($_POST["method"])) {
        if ($_POST["method"] === "getEmployees") {
            print_r(getEmployees());
        } 
    }
}
