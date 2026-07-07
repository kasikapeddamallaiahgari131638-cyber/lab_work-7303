<?php
// PHP Program to Merge Two Arrays

// First array
$array1 = array("Apple", "Banana", "Mango");

// Second array
$array2 = array("Orange", "Grapes", "Pineapple");

// Merge the arrays
$mergedArray = array_merge($array1, $array2);

// Display the merged array
echo "Merged Array:<br>";
print_r($mergedArray);
?>