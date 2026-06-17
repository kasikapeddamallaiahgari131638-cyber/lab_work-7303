<?php

function welcomeStudent() {
    echo "Welcome Student!";
}

if (function_exists('welcomeStudent')) {
    welcomeStudent(); // Call the function
} else {
    echo "Error: Function does not exist.";
}
?>