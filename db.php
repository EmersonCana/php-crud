<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exampledb";
$port = 3307;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>