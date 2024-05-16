<?php
// Database connection parameters
$servername = "localhost";
$employeename = "employeename";
$emailid = "emailid";
$PANNO = "PANNO";
$database = "interview";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Validate form inputs
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["root"];
    $password = $_POST[""];
    $database = $_POST["interview"];

    // // Hash the password for security
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // SQL query to insert data into a table
    $sql = "INSERT INTO employee_date (employeename, emailid,PANNO) VALUES ('$employyename', '$emailid','PANNO')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>