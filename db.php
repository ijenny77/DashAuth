<?php
$host= "localhost";
$user = "root";
$password = "1miriotta1";
$database = "auth_system";

$conn = new mysqli($host,$user,$password,$database);
if($conn->connect_error){
    exit("Connection Failed: ".$conn->connect_error);
}
?>