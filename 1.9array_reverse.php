<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter array values separated by comma:
    <input type="text" name="values">
    <input type="submit" value="Reverse Array">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $values = $_POST["values"];

    $array = explode(",", $values);

    $array = array_map("trim", $array);

    $reverseArray = array_reverse($array);

    echo "<h3>Original Array:</h3>";

    foreach ($array as $value) {
        echo $value . " ";
    }

    echo "<h3>Reversed Array:</h3>";

    foreach ($reverseArray as $value) {
        echo $value . " ";
    }
}

?>

</body>
</html>