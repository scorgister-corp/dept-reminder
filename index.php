<?php

if(isset($_GET["page"]) && $_GET["page"] != "") {
    switch ($_GET["page"]) {
        case "login":
            include_once("login.php");
            break;
        default:
            include_once("404.php");
    }
}else {
    include_once("400.php");
}

?>