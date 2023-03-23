<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learn_english";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected to DataBase successfully";