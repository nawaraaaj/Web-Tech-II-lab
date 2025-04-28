<?php
// Database credentials
$servername = "localhost";     // or use 127.0.0.1
$username = "root";            // your MySQL username
$password = "";                // your MySQL password
$database = "firstwebsite";   // name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
echo "Connected successfully<br>";
echo "Nawaraj Neupane";
?>
