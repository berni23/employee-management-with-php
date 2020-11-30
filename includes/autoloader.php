
<?php


function myAutoLoader($className)
{
    $path = "libs/classes/";
    $extension = ".php";
    $fullPath = $path . $className . $extension;


    if (!file_exists($fullPath)) {

        return false;
    }

    include_once $fullPath;
}
