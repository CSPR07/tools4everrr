<?php
$servername = "localhost";
$username = "id18739086_root";
$password = "GxkC1N4Mx!Hh&--^";
$database = "id18739086_tools4ever";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
