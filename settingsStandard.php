<?php

session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.html");
}

header("Location:settingsStandard.html");
echo "Welcome " . $_SESSION['user'];

?>