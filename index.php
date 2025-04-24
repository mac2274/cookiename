<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Cookie setzen und Namen aufrufen</title>
</head>
<body>
<?php 
//Aufgabe aus der DBE-Seite
if (isset($_POST["submit"])) {
    $name = $_POST['name'];

    setcookie('username', $name, time() +3600);

    header('location: index.php');
    exit;
}

if (isset($_COOKIE['username'])){
    $username = $_COOKIE['username'];

    echo "<h1>Hallo, $username !</h1>";
}
?>


    <form action="index.php" method="POST">
        <label for="name">Name: </label>
        <input type="text" name="name" id="">
        <input type="submit" value="Senden">
    </form>
</body>
</html>