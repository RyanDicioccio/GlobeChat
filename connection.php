<!-- Author: Jia Hong Shih -->
<?php

// Database configuration
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "global_chat"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
