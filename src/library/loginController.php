<?php
include_once "loginManager.php";
//session_start();



if (isset($_POST)) {
    if (isset($_POST["method"])) {
        if ($_POST["method"] === "login") {
            print_r(validateLogin($_POST["username"], $_POST["password"]));
        } elseif ($_POST["method"] === "logout") {
            logOut();
        } elseif($_POST["method"] == "register") {
            print_r(registerUser($_POST["newUsername"], $_POST["newPassword"], $_POST["newEmail"]));
        }
    }
}
