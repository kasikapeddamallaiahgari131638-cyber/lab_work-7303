<?php
$str = "Welcome to PHP Programming";

$word = "PHP";
$position = strpos($str, $word);

if ($position !== false)
{
    echo "The word '$word' is found at position: " . $position;
}
else
{
    echo "Word not found.";
}
?>