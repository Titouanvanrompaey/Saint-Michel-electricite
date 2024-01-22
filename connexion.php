<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "infosclients";
// Create connection
$conn = new mysqli($server, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "connecté";
$conn->set_charset("utf8");
?>