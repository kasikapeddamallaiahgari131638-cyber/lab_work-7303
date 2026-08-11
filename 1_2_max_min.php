<!DOCTYPE html>
<html>
<head>
    <title>Maximum and Minimum</title>
</head>
<body>

<h2>Maximum and Minimum Number</h2>

<?php

$num1 = 25;
$num2 = 75;
$num3 = 45;
$num4 = 90;
$num5 = 30;

$maximum = max($num1, $num2, $num3, $num4, $num5);
$minimum = min($num1, $num2, $num3, $num4, $num5);

echo "Numbers: $num1, $num2, $num3, $num4, $num5<br><br>";

echo "Maximum Number: " . $maximum . "<br>";
echo "Minimum Number: " . $minimum;

?>

</body>
</html>