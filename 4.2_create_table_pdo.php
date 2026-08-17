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

    // Set error mode
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL query
    $sql = "CREATE TABLE students (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        city VARCHAR(50)
    )";

    $conn->exec($sql);

    echo "Table created successfully!";

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;

?>