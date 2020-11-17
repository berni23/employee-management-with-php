<!-- TODO If you are going to add the extra feature implement here the image selection as a gallery or whatever you like -->
<?php
require "../../vendor/autoload.php";

$apikey = "B5100CB8-4F554B96-9C080608-507B7935";

if (isset($_GET)) {

    if (isset($_GET["gender"]) && isset($_GET["age"])) {
        callAPI($apikey, $_GET["gender"], $_GET["age"]);
    }
}