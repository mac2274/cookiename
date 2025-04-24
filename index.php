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

//hier prüfen ob Formular abgeschickt ist
if (isset($_POST["submit"])) {
    $name = $_POST['name'];

    //cookie setzen
    setcookie('name', $name, time() +3600);

    //Weiterleitung zur aktuellen Seite
    header("location: index.php"); //aber wieso php_self? // und wenn action="" dann index.php? 
    exit;
}

if (isset($_COOKIE['name'])){
    $name = $_COOKIE['name'];

    echo "<h1>Hallo, $name !</h1>";
}
?>

    <form action="" method="POST">
        <label for="name">Name: </label>
        <input type="text" name="name" id="">
        <input type="submit" name="submit" value="Senden"><!--name="submit" ist wichtig!!-->
    </form>
</body>
</html>