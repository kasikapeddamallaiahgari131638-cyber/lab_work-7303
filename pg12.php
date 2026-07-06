<!DOCTYPE html>
<html>
<head>
    <title>Reverse Array</title>
</head>
<body>

<form method="post">
    Enter array values (comma separated):
    <input type="text" name="arr" required>
    <input type="submit" value="Reverse">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $array = explode(",", $_POST["arr"]);
    $reversed = array_reverse($array);

    echo "<h3>Reversed Array:</h3>";
    foreach ($reversed as $value) {
        echo trim($value) . "<br>";
    }
}
?>

</body>
</html>