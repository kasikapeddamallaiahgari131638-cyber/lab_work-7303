<?php
function calculatePercentage($sub1, $sub2, $sub3, $sub4, $sub5)
{
    $total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
    $percentage = ($total / 500) * 100; // Assuming each subject is out of 100
    return $percentage;
}

// Example usage
$percentage = calculatePercentage(85, 90, 78, 88, 92);

echo "Percentage: " . $percentage . "%";
?>