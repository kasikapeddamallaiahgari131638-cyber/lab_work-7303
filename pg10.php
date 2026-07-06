<!DOCTYPE html>
<html>
<head>
    <title>Print Array Values</title>
</head>
<body>

<form method="post">
    Enter array values (comma separated):
    <input type="text" name="arr" required>
    <input type="submit" value="Print">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $array = explode(",", $_POST["arr"]);

    echo "<h3>Array Values:</h3>";
    foreach ($array as $value) {
        echo trim($value) . "<br>";
    }
}
?>

</body>
</html>