<?php
include_once "loginManager.php";

if(isset($_GET) && count($_GET) != 0) {
    if(isset($_GET["method"])) {
        if($_GET["method"] == "getTimeLogged") {
            print_r(showTimeLogged());
        } elseif($_GET["method"] == "closeSession") {
            logOut();
        }
    }
}
function showTimeLogged() {
    return time() - $_SESSION["timeLogged"];
}


?>