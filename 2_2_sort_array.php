<!DOCTYPE html>
<html>
<head>
    <title>Sort Array</title>
</head>
<body>

<h2>Sort an Array</h2>

<form method="post">
    Enter numbers separated by comma:
    <input type="text" name="numbers" required>

    <br><br>

    <input type="submit" name="sort" value="Sort Array">
</form>

<?php

if (isset($_POST["sort"])) {

    $input = $_POST["numbers"];

    // Convert string into array
    $arr = explode(",", $input);

    // Remove spaces
    $arr = array_map("trim", $arr);

    // Convert values to numbers
    $arr = array_map("intval", $arr);

    // Sort array
    sort($arr);

    echo "<h3>Sorted Array:</h3>";

    foreach ($arr as $value) {
        echo $value . " ";
    }
}

?>

</body>
</html>