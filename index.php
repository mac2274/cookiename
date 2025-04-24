<?php 
//Aufgabe aus der DBE-Seite
if (isset($_COOKIE["name"])) {}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Cookie setzen und Namen aufrufen</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="name">Name: </label>
        <input type="text" name="name" id="">
        <input type="submit" value="Senden">
    </form>
</body>
</html>