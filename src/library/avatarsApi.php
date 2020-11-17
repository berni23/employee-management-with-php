<?php
require "../../vendor/autoload.php";

$apikey = "B5100CB8-4F554B96-9C080608-507B7935";

if (isset($_GET)) {

    if (isset($_GET["gender"]) && isset($_GET["age"])) {
        callAPI($apikey, $_GET["gender"], $_GET["age"]);
    }
}


function callAPI($key, $gender, $age)
{

    $from_age = $age - 2;
    $to_age = $age + 2;


    $curl = new Curl\Curl();
    $curl->setHeader('X-API-KEY', $key);
    $curl->get("https://uifaces.co/api?gender=$gender&from_age=$from_age&to_age=$to_age");
    if ($curl->error) {
        echo $curl->error_code;
    } else {
        echo $curl->response;
    }
}
