
<?php

// Index Arrays
// Single Dimension Array
$array_one = array("One",'Two',"Three");
$array_two = array("four","five",6,3.2);

// Traverse the arrays
// Data Extractions

foreach($array_one as $index => $one)
{
    echo "$index - $one !";
    echo "<br>";
}


echo "<pre>";
print_r($array_one);
echo "</pre>";

// Array Functions
echo "<pre>";
print_r(array_push($array_one,"Four"));
echo "</pre>";


echo "<pre>";
print_r($array_one);
echo "</pre>";

echo "<pre>";
print_r(array_pop($array_one));
echo "</pre>";


echo "<pre>";
print_r($array_one);
echo "</pre>";

echo "<pre>";
$array_three = array_merge($array_one,$array_two);
print_r($array_three);
echo "</pre>";

echo "<pre>";
print_r(array_keys($array_one));
echo "</pre>";


echo "<pre>";
print_r(array_flip($array_one));
echo "</pre>";

echo "<pre>";
print_r(array_values($array_one));
echo "</pre>";



