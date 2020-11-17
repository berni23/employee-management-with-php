<?php
session_start();

function validateLogin($userName, $password)
{
    $string = file_get_contents("../../resources/users.json");

    $users = json_decode($string, true);

    foreach ($users["users"] as $i => $user) {
        if ($user["name"] === $userName) {
            $pss = $user['password'];
            if (password_verify($password, $pss)) {
                $_SESSION["userName"] = $user["name"];
                $_SESSION["uid"] = $users["userId"];
                $_SESSION["email"] = $users["email"];
                header("Location: ../dashboard.php");
            }
        }
    }
}
 

function logOut()
{
    unset($_SESSION["userName"]);
    unset($_SESSION["uid"]);
    unset($_SESSION["email"]);
    session_destroy();
    header("Location: ../..");
}

