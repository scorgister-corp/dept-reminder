<?php
include_once("api.php");

$result = array(
    "error"=> 404,
    "message"=> "Not Found"
);

echo json_encode($result);
?>