<?php
include_once "loginManager.php";
//session_start();

//Check if post exist
if (isset($_POST)) {
    if (isset($_POST["method"])) {
        if ($_POST["method"] === "login") {
            print_r(validateLogin($_POST["username"], $_POST["password"]));
        } elseif ($_POST["method"] === "logout") {
            logOut();
        }
    }
}
