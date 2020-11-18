<?php
function callAPI($key, $gender, $age)
{

    $from_age = $age - 2;
    $to_age = $age + 2;

    $curl = new Curl\Curl();
    $curl->setHeader('X-API-KEY', $key);
    $curl->get("https://uifaces.co/api?gender[]=$gender&from_age=$from_age&to_age=$to_age");
    if ($curl->error) {
        echo $curl->error_code;
    } else {
        echo $curl->response;
    }
}
