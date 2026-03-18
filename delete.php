<?php
require "db.php";
$id = $_GET['id'];
// $sql = "DELETE FROM users WHERE id = $id";

$stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
$stmt->bind_param("i", $id);
$result = $stmt->execute();

// $result = $conn->query($sql);

if($result == true){
    header("Location: settings.php");
}else{
    echo "Error deleting record: " . $conn->error;
}
$conn->close();

?>