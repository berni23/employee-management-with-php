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

    foreach($employees as $i => $employee) {
        if($employee["id"] == $id) {
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
}


function getEmployee(string $id)
{
    // TODO implement it
    $string = file_get_contents("../../resources/employees.json");

    $employees = json_decode($string, true);

    $return = false;

    foreach($employees as $i => $employee) {
        if($employee["id"] == $id) {
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
