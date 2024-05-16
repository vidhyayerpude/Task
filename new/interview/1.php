<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "interview";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $employeename = $_POST['employeename'];
    $emailid = $_POST['emailid'];
    $pan_no = $_POST['pan_no']; // Note: It's recommended to hash the password for security
