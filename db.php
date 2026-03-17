<?php
include "config.php";
$conn = new mysqli($host,$user,$password,$database);
if($conn->connect_error){
    exit("Connection Failed: ".$conn->connect_error);
}
?>