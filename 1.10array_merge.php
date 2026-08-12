<!DOCTYPE html>
<html>
<body>

<form method="post">

    Enter first array values separated by comma:
    <input type="text" name="array1"><br><br>

    Enter second array values separated by comma:
    <input type="text" name="array2"><br><br>

    <input type="submit" value="Merge Arrays">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $array1 = explode(",", $_POST["array1"]);
    $array2 = explode(",", $_POST["array2"]);

    $array1 = array_map("trim", $array1);
    $array2 = array_map("trim", $array2);

    $mergedArray = array_merge($array1, $array2);

    echo "<h3>First Array:</h3>";
    foreach ($array1 as $value) {
        echo $value . " ";
    }

    echo "<h3>Second Array:</h3>";
    foreach ($array2 as $value) {
        echo $value . " ";
    }

    echo "<h3>Merged Array:</h3>";
    foreach ($mergedArray as $value) {
        echo $value . " ";
    }
}

?>

</body>
</html>