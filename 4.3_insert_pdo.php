<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

try {

    $conn = new PDO(
        "mysql:host=$servername;dbname=$dbname",
        $username,
        $password
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Insert query
    $sql = "INSERT INTO students (name, email, city)
            VALUES ('Hardik', 'hardik@gmail.com', 'Ahmedabad')";

    $conn->exec($sql);

    echo "Data inserted successfully!";

} catch(PDOException $e) {

    echo "Error: " . $e->getMessage();

}

$conn = null;

?>