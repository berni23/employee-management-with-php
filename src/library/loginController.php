<?php
require_once "loginManager.php";
//session_start();

//Check if post exist
if (isset($_POST)) {
    //   print_r($_POST);
    if (isset($_POST["method"])) {
        if ($_POST["method"] === "login") {
            validateLogin($_POST["username"], $_POST["password"]);
            /*
            //Error login msg 
            if (empty($userName) || empty($password)) {
                echo "Enter both fields.";
            } elseif ($username) {
                $patternPass = "/^(?=.*[A-Z]).{8,}$/";
                $patternName = "^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$";
                if (preg_match($patternName, $userName)) {
                    echo "ok";
                } else {
                    echo "Invalid username";
                }
                if (preg_match($patternPass, $password)) {
                    echo "ok";
                } else {
                    echo "Password does not exixst";
                }*/
            }



        } elseif ($_POST["method"] === "logout") {
            logOut();
        }
    }
}
