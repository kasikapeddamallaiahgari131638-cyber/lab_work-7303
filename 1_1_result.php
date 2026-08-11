<!DOCTYPE html>
<html>
<head>
    <title>Previous Semester Result</title>
</head>
<body>

<h2>Previous Semester Result</h2>

<?php

// Variables
$name = "Rahul";
$roll_no = 101;

$subject1 = 75;
$subject2 = 82;
$subject3 = 68;
$subject4 = 79;
$subject5 = 85;

// Constant
define("TOTAL_SUBJECTS", 5);

// Calculate total and percentage
$total = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;
$percentage = $total / TOTAL_SUBJECTS;

// Display result
echo "Name: " . $name . "<br>";
echo "Roll No: " . $roll_no . "<br><br>";

echo "Subject 1: " . $subject1 . "<br>";
echo "Subject 2: " . $subject2 . "<br>";
echo "Subject 3: " . $subject3 . "<br>";
echo "Subject 4: " . $subject4 . "<br>";
echo "Subject 5: " . $subject5 . "<br><br>";

echo "Total Marks: " . $total . "<br>";
echo "Percentage: " . $percentage . "%";

?>

</body>
</html>