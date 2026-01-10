<?php
// Database configuration template
// Copy this file to database_login_values.php and update with your actual credentials

$servername = "localhost";
$username = "your_db_username";
$password = "your_db_password";
$database = "users_info";

// Create connection with error handling
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    error_log("Database connection failed: " . $conn->connect_error);
    die("Connection failed. Please try again later.");
}

// Set charset to prevent character set confusion attacks
$conn->set_charset("utf8");
?>