<?php

$server_name = "localhost";
$db_user_name = "root";
$db_password = "";
$db_database_name = "academy";

$conn = mysqli_connect($server_name, $db_user_name, $db_password, $db_database_name);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>