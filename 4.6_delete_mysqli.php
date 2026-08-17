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

// ID of record to delete
$id = 2;

// Delete query
$sql = "DELETE FROM students WHERE id = $id";

if ($conn->query($sql) === TRUE) {

    echo "Data deleted successfully!";

} else {

    echo "Error deleting data: " . $conn->error;

}

$conn->close();

?>