<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter array values separated by comma:
    <input type="text" name="values">
    <input type="submit" value="Print Array">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $values = $_POST["values"];

    $array = explode(",", $values);

    echo "<h3>Array Values:</h3>";

    foreach ($array as $value) {
        echo trim($value) . "<br>";
    }
}

?>

</body>
</html>