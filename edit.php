<?php
require "db.php";

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<style>
    form{
        background-color: #f0f0f0;
        border: 3px solid black;
        border-radius: 5px;
        padding: 1rem;
        width: 300px;
        margin: 10rem auto;
        font-size: 1.2rem;
    }
    input[type="text"]{
        width: 100%;
        padding: 0.5rem;
        margin-bottom: 1rem;
        border: 2px solid black;
        border-radius: 5px;
    }
    input[type="submit"]{
        background-color: black;
        color: white;
        border: 2px solid black;
        border-radius: 5px;
        padding: 0.5rem 1rem;
        cursor: pointer;
        width:90%;
        margin-left:5%; 
    }

</style>
<form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    Username: <input type="text" name="username" value="<?php echo $row['username']; ?>"><br>
    Email: <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>

    <input type="submit" name="update" value="Update">
</form>