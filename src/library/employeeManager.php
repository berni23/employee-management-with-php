<?php
/**
 * EMPLOYEE FUNCTIONS LIBRARY
 *
 * @author: Jose Manuel Orts
 * @date: 11/06/2020
 */
function getEmployees()
{
    $string = file_get_contents("../../resources/employees.json");

    return $string;
}

function addEmployee(array $newEmployee)
{
    // TODO implement it
    $string = file_get_contents("../../resources/employees.json");

    $employees = json_decode($string, true);

    $highestId = 0; 

    foreach ($employees as $i => $employee) {
        if ($employee["id"] > $highestId) {
            $highestId = $employee["id"];
        }
    }

    $newEmployee["id"] = $highestId + 1;

    array_push($employees, $newEmployee);

    file_put_contents("../../resources/employees.json", json_encode($employees));

    $return = "valid";

    return $return;
}


function deleteEmployee(string $id)
{
    // TODO implement it
    $string = file_get_contents("../../resources/employees.json");

    $employees = json_decode($string, true);

    $return = false;

    foreach ($employees as $i => $employee) {
        if ($employee["id"] == $id) {
            array_splice($employees, $i, 1);
            $return = $employees;
        }
    }
    file_put_contents("../../resources/employees.json", json_encode($employees));

    return $return;
}


function updateEmployee(array $updateEmployee)
{
    // TODO implement it
    $employee = getEmployee($updateEmployee["id"]);
    $newEmployee = $employee;
    $keys = array_keys($updateEmployee);
    for ($i = 0; $i < count($keys); $i++) {
        if ($keys[$i] == "name") {
            $newEmployee["name"] = $updateEmployee[$keys[$i]];
        }
        if ($keys[$i] == "lname") {
            $newEmployee["lastName"] = $updateEmployee[$keys[$i]];
        }
        if ($keys[$i] == "email") {
            $newEmployee["email"] = $updateEmployee[$keys[$i]];
        }
        if ($keys[$i] == "address") {
            $newEmployee["streetAddress"] = $updateEmployee[$keys[$i]];
        }
        if ($keys[$i] == "state") {
            $newEmployee["state"] = $updateEmployee[$keys[$i]];
        }
        if ($keys[$i] == "age") {
            $newEmployee["age"] = $updateEmployee[$keys[$i]];
        }
        if ($keys[$i] == "pc") {
            $newEmployee["postalCode"] = $updateEmployee[$keys[$i]];
        }
        if ($keys[$i] == "phone") {
            $newEmployee["phoneNumber"] = $updateEmployee[$keys[$i]];
        }
        if ($keys[$i] == "gender") {
            $newEmployee["gender"] = $updateEmployee[$keys[$i]];
        }
        if ($keys[$i] == "city") {
            $newEmployee["city"] = $updateEmployee[$keys[$i]];
        }
    }
    
    $string = file_get_contents("../../resources/employees.json");
    $employees = json_decode($string, true);
    //$employee = json_decode($employee, true);
    // $result = array_diff($employees, $employee);
    $i = array_search($employee, $employees);
    $employees[$i] = $newEmployee;
    file_put_contents("../../resources/employees.json", json_encode($employees));
    return $newEmployee;
}


function getEmployee(string $id)
{
    // TODO implement it
    $string = file_get_contents("../../resources/employees.json");

    $employees = json_decode($string, true);

    $return = false;

    foreach ($employees as $i => $employee) {
        if ($employee["id"] == $id) {
            $return = $employee;
        }
    }

    return $return;
}


function removeAvatar($id)
{
    // TODO implement it
}


function getQueryStringParameters(): array
{
    // TODO implement it
    return array();
}

function getNextIdentifier(array $employeesCollection): int
{
    // TODO implement it
    return 0;
}
