<?php
$servername = "localhost";
$username = "omiboard";
$password = "k4faG5udwHLPORts";
$database = "omiboard";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
