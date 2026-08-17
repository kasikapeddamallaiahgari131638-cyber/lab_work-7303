<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

try {

    // Create connection
    $conn = new PDO(
        "mysql:host=$servername;dbname=$dbname",
        $username,
        $password
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // ID of record to delete
    $id = 2;

    // Delete query
    $sql = "DELETE FROM students WHERE id = :id";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // Execute query
    $stmt->execute(['id' => $id]);

    echo "Data deleted successfully!";

} catch(PDOException $e) {

    echo "Error: " . $e->getMessage();

}

$conn = null;

?>