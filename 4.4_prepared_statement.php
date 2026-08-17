<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare statement
$stmt = $conn->prepare(
    "INSERT INTO students (name, email, city) VALUES (?, ?, ?)"
);

// Values
$name = "Rahul";
$email = "rahul@gmail.com";
$city = "Surat";

// Bind values
$stmt->bind_param("sss", $name, $email, $city);

// Execute statement
if ($stmt->execute()) {
    echo "Data inserted successfully using prepared statement!";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();

?>