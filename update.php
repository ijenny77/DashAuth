<?php
require "db.php";

$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];

$sql = "UPDATE users SET username='$username', email='$email' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: settings.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>