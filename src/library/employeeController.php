<?php
require_once "employeeManager.php";
session_start();

//Check if post exist

$method = $_SERVER['REQUEST_METHOD'];
$request = explode("/", substr(@$_SERVER['PATH_INFO'], 1));

switch ($method) {
    case 'PUT':

        break;
    case 'POST':
        //print_r($_POST);
        addEmployee(($_POST));
        break;
    case 'GET':
        if (isset($_GET["id"])) {
            //echo $_GET["id"];
            print_r(json_encode(getEmployee($_GET["id"])));
        } else {
            print_r(getEmployees());
        }
        break;
    case 'DELETE':
        parse_str(file_get_contents("php://input"), $post_vars);
        print_r(json_encode(deleteEmployee($post_vars["id"])));
        break;
    default:
        //handle_error($request);  
        break;
}

// if (isset($_POST)) {
//     if (isset($_POST["method"])) {
//         if ($_POST["method"] === "getEmployees") {
//             print_r(getEmployees());
//         } 
//     } else {
//        print_r($_POST);

//     }
// } else if(isset($_GET)) {
//     print_r($_GET);
// }else if(isset($_)) {
//     print_r($_GET);
// }
