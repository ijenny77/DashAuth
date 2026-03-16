<?php
require"db.php";
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$hashed_password = password_hash($password,PASSWORD_DEFAULT);
$sql = "INSERT INTO users (username,email,password)
VALUES ('$username','$email','$hashed_password')";

if($conn->query($sql) === TRUE){
    echo "User connected successfully!";
    echo "you can now login from here :";
    echo "<a href='login.html'  >Login</a>";
}else{
    echo "Error:".conn->error;
}

?>