<?php

$servername = "10.0.0.141";
$username = "admin";
$password = "Masalembo123@";
$db = "onlineshop";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
