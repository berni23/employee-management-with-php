<?php
session_start();

function validateLogin($userName, $password)
{
    $string = file_get_contents("../../resources/users.json");

    $users = json_decode($string, true);
    foreach ($users["users"] as $i => $user) {
        if ($user["name"] == $userName) {
            $pss = $user['password'];
            if (password_verify($password, $pss)) {
                $_SESSION["userName"] = $user["name"];
                $_SESSION["uid"] = $user["userId"];
                $_SESSION["email"] = $user["email"];
                $_SESSION["timeLogged"] = time();
                return "valid";
                header("Location: ../dashboard.php");
            }
            return "Password is wrong.";
        }
    }
    return "This user was not found.";
}
function registerUser($userName, $password, $email)
{
    $string = file_get_contents("../../resources/users.json");
    $highestId = 0;
    $users = json_decode($string, true);
    foreach ($users["users"] as $i => $user) {
        if ($user["name"] == $userName) {

            return "User is already registered.";
        } elseif ($user["email"] == $email) {

            return "Email is already registered.";
        } elseif ($user["userId"] >= $highestId) {
            $highestId = $user["userId"];
        }
    }
    $highestId++;
    $disUser = array("userId" => $highestId, "name"=>$userName, "password"=> password_hash($password, PASSWORD_DEFAULT), "email"=>$email);
    array_push($users["users"], $disUser);
    file_put_contents("../../resources/users.json", json_encode($users));
    return "User Successfully Registered.";
}
function logOut()
{
    unset($_SESSION["userName"]);
    unset($_SESSION["uid"]);
    unset($_SESSION["email"]);
    session_destroy();
    header("Location: ../..");
}
