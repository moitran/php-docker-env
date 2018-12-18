<?php

echo "Site2";
echo "</br>";

$servername = "mysql";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection mysql failed: " . $conn->connect_error);
} 
echo "Connected mysql successfully";