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

// Select query
$sql = "SELECT id, name, email, city FROM students";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<h2>Student Details</h2>";

    echo "<table border='1' cellpadding='10'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>City</th>";
    echo "</tr>";

    while ($row = $result->fetch_assoc()) {

        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["city"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

} else {

    echo "No records found.";

}

$conn->close();

?>