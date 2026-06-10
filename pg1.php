<?php
define("COLLEGE_NAME", "KORM College");

$studentName = "Sampath kumar";
$semester = "Semester 6";
$totalMarks = 600;
$obtainedMarks = 560;

$percentage = ($obtainedMarks / $totalMarks) * 100;

echo "<h2>Previous Semester Result</h2>";
echo "College Name: " . COLLEGE_NAME . "<br>";
echo "Student Name: " . $studentName . "<br>";
echo "Semester: " . $semester . "<br>";
echo "Total Marks: " . $totalMarks . "<br>";
echo "Obtained Marks: " . $obtainedMarks . "<br>";
echo "Percentage: " . $percentage . "%";
?>